<?php

require '../app/classes/Authentication.php';

/**
	 * Get a boolean to determine if an account should be locked out due to
	 * exceeded login attempts within a given period
	 *
	 * @return	redirect and flash if locked out
*/
$is_time_locked_out = function ($app) {
    return function () use ($app) {
        $identity = $app->request()->post('email');
		//return $this->get_last_attempt_time($identity) > time() - $this->config->item('lockout_time', 'ion_auth');
		//logic to lock an account if they have tried logging in 25 times within 3 minutes
    };
};

$authenticate = function ($app) {
    return function () use ($app) {
        if (!isset($_SESSION['user'])) {
            $_SESSION['urlRedirect'] = $app->request()->getPathInfo();
            $app->flash('error', 'Login required');
            $app->redirect('/login');
        }
    };
};

/*
	Hook for authentication
*/
$app->hook('slim.before.dispatch', function() use ($app) { 
   $user = null;
   if (isset($_SESSION['user'])) {
      $user = $_SESSION['user'];
   }
   $app->view()->setData('user', $user);
});

$app->get("/", $authenticate($app), function () use ($app) {
	$user = R::findOne('users',' email = ? ',array($_SESSION['user']));
	$app->render('index.php', array('name'=>$user->first_name." ".$user->last_name));
});

$app->get("/logout", function () use ($app) {
	unset($_SESSION['user']);
	$app->view()->setData('user', null);
	$app->flash('error', 'Logout successful');
	$app->redirect("/login");
});

$app->get("/login", function () use ($app) {
   $flash = $app->view()->getData('flash');

   $error = '';
   if (isset($flash['error'])) {
      $error = $flash['error'];
   }

   $urlRedirect = '/';

   if ($app->request()->get('r') && $app->request()->get('r') != '/logout' && $app->request()->get('r') != '/login') {
      $_SESSION['urlRedirect'] = $app->request()->get('r');
   }

   if (isset($_SESSION['urlRedirect'])) {
      $urlRedirect = $_SESSION['urlRedirect'];
   }

   $email_value = $email_error = $password_error = '';


   if (isset($flash['email'])) {
      $email_value = $flash['email'];
   }

   $app->render('\Authentication\Login.php', array('error' => $error, 'email_value' => $email_value, 'urlRedirect' => $urlRedirect));
});

$app->post("/login", function () use ($app) {

    $email = $app->request()->post('email');
    $password = $app->request()->post('password');
	
    $errors = array();
	
	$auth = new Authentication($app->request()->post('email'), $app->request()->post('password'));
		
	//if username or password is empty
	if($auth->isEmpty()){
		$_SESSION['urlRedirect'] = $app->request()->getPathInfo();
		$app->flash('error', 'Email and password required');
		$app->redirect('/login');
	}else if(!$auth->login()){
		$app->flash('email', $email);
		$app->flash('error', $auth->getError());
		$app->redirect('/login');
	}
	//success! Set the following properties
    $_SESSION['user'] = $email;

    if (isset($_SESSION['urlRedirect'])) {
       $tmp = $_SESSION['urlRedirect'];
       unset($_SESSION['urlRedirect']);
       $app->redirect($tmp);
    }
    $app->redirect('/');
});

$app->get("/create/new/user", function () use ($app) {	
   $flash = $app->view()->getData('flash');
   $error = $first_name = $last_name = $company = $phone = $email = '';
   //get groups
   $groups = R::findAll('groups');
   if (isset($flash['error'])) {
      $error = $flash['error'];
   }
   if (isset($flash['first_name'])) {
      $first_name = $flash['first_name'];
   }
   if (isset($flash['last_name'])) {
      $last_name = $flash['last_name'];
   }
   if (isset($flash['company'])) {
      $company = $flash['company'];
   }
   if (isset($flash['phone'])) {
      $phone = $flash['phone'];
   }
   if (isset($flash['email'])) {
      $email = $flash['email'];
   }
   if (isset($flash['email'])) {
      $email = $flash['email'];
   }
   $app->render('Authentication/CreateUser.php', array( 'error' => $error, 'first_name' => $first_name, 'last_name' => $last_name, 'company' => $company,'phone' => $phone,'email' => $email, 'groups' => $groups));
});
$app->post("/create/new/user", $authenticate($app), function () use ($app) {
    $first_name = $app->request()->post('first_name');
	$last_name = $app->request()->post('last_name');
	$company = $app->request()->post('company');
	$phone = $app->request()->post('phone');
	$email = $app->request()->post('email');
    $password = $app->request()->post('password');
	$group = $app->request()->post('group');
	
	$app->flash('first_name', $first_name);
	$app->flash('last_name', $last_name);
	$app->flash('company', $company);
	$app->flash('phone', $phone);
	$app->flash('email', $email);
	
	$error = '';
	
	if(trim($first_name) == false)
		$error .= "Please enter your first name.<br />";		
	else if(preg_match("/^[a-zA-Z ]*$/", $first_name)===0)
		$error .= "First Name must be from letters only.<br />";
	if(trim($last_name) == false)
		$error .= "Please enter your last name.<br />";		
	if(preg_match("/^[a-zA-Z ]*$/", $last_name)===0)
		$error .= "Last Name must be from letters only.<br />";
	if(trim($company) == false && preg_match("/^[a-zA-Z ]*$/", $company)===0){
		$error .= "Company must be from letters only.<br />";
	}
	if(trim($phone) == false && !preg_match("/^([1]-)?[0-9]{3}-[0-9]{3}-[0-9]{4}$/i", $phone) ) { 
		$error .= "Please enter a valid phone number.<br />";
	}
	if(trim($email) == false)
		$error .= "Please enter your email, you will be using this email to login.<br />";
	else if(preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $email)===0)
		$error .= "Please enter in a valid email.<br />";
	if(empty($password))
		$error .= "Please enter in a password.<br />";
	if( strlen($password) < 8 )
		$error .= "Password too short!<br />";
	if( !preg_match("#[0-9]+#", $password) )
		$error .= "Password must include at least one number!<br />";
	if( !preg_match("#[a-z]+#", $password) )
		$error .= "Password must include at least one letter!<br />";
	if( !preg_match("#[A-Z]+#", $password) )
		$error .= "Password must include at least one CAPS!<br />";
	//if( !preg_match("#\W+#", $password) ) {
	//	$error .= "Password must include at least one symbol!<br />";
	//}
	if(!empty($error)){
		$app->flash('error', $error);
		$app->redirect('/create/new/user');
	}
	$auth = new Authentication($email, $password);
	if(!$auth->createUser($first_name, $last_name, $company, $phone, $group)){
		$app->flash('error', $error . "<br />".$auth->getError());
		$app->redirect('/create/new/user');
	}
	
	$_SESSION['user'] = $email;
	$app->redirect('/');
});

$app->get("/forgotpassword", function () use ($app) {	
	$flash = $app->view()->getData('flash');
	$error = "";
	echo "error: ".$flash['error'];
	if (isset($flash['error'])) {
      $error = $flash['error'];
   	}
	$app->render("Authentication/Forgotpassword.php",array('error'=>$error));
});
$app->get("/forgotpassword/:activation_code", function($activation_code) use ($app){
	try {
  		// query database for single article
    	$activationCode = R::findOne('users', 'forgotten_password_code=?', array($activation_code)); 
    	if ($activationCode != false  && $activationCode->forgotten_password_time+(20*60) > time()) {
      		// if found, then render password reset page
      		$app->render("Authentication/ForgotPasswordForm.html");
    	} else {
      		// else throw exception
			$flash = $app->view()->getData('flash');
			$flash['error'] = "Activation code expired, please try the forgotton password link again";
      		$app->redirect("/login");
    	}
  	} catch (ResourceNotFoundException $e) {
		// return 404 server error
    	$app->response()->status(404);
	} catch (Exception $e) {
		$app->response()->status(400);
		$app->response()->header('X-Status-Reason', $e->getMessage());
	}
});
$app->post("/forgotpassword", function() use ($app){
	$email = $app->request()->post('email');
	if(trim($email) == false || preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $email)===0 || !filter_var($email, FILTER_VALIDATE_EMAIL)){
		$app->flash('error', "Please enter in a valid email.<br />");
		$app->redirect('/forgotpassword');
	}
	//run the forgotten password method to email an activation code to the user
	
	$auth = new Authentication($email);
	if ($auth->fogottenPassword()){
		//if there were no errors
		$app->redirect("/success");
	}
	else{
		$app->flash('error', $auth->getError());
		$app->redirect('/forgotpassword');
	}
});

$app->get("/success", function () use ($app) {	
	$app->render("Authentication/Success.php");
});

?>