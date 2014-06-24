<?php
/*
 | -------------------------------------------------------------------------
 | Hash Method (sha1 or bcrypt)
 | -------------------------------------------------------------------------
 | Bcrypt is available in PHP 5.3+
 |
 | IMPORTANT: Based on the recommendation by many professionals, it is highly recommended to use
 | bcrypt instead of sha1.
 |
 | NOTE: If you use bcrypt you will need to increase your password column character limit to (80)
 |
 | Below there is "default_rounds" setting.  This defines how strong the encryption will be,
 | but remember the more rounds you set the longer it will take to hash (CPU usage) So adjust
 | this based on your server hardware.
 |
 | If you are using Bcrypt the Admin password field also needs to be changed in order login as admin:
 | $2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36
 |
 | Becareful how high you set max_rounds, I would do your own testing on how long it takes
 | to encrypt with x rounds.
 */
require '../app/Classes/Bcrypt.php';

class Authentication {

    private $identity;
    private $password;
	private $error;
	private $hash_method;				// IMPORTANT: Make sure this is set to either sha1 or bcrypt
	private $default_rounds = 8;		// This does not apply if random_rounds is set to true
	private $random_rounds  = FALSE;
	private $min_rounds     = 5;
	private $max_rounds     = 9;
	private $rounds;
	private $bcrypt;
	private $salt_length  	= 10;

	public function __construct($identity = '', $password = '', $hash_method='bcrypt') {
        //if identity is the email.. implementing only email for now`
		if (!empty($identity)) {
			$this->identity = filter_var(stripslashes(trim($identity)), FILTER_SANITIZE_EMAIL);
        }
		if (!empty($password)) {
            $this->password= $password;
        }
		$this->hash_method = $hash_method;
		if ($this->hash_method == 'bcrypt') {
			if ($this->random_rounds){
				$rand = rand($this->min_rounds,$this->max_rounds);
				$this->rounds = array('rounds' => $rand);
			}else{
				$this->rounds = array('rounds' => $this->default_rounds);
			}
		}
		$this->bcrypt = new Bcrypt($this->rounds);
    }

    /*public function __destruct() {
        echo "Bye for now\n";
    }*/
	public function getIdentity(){
		return $this->identity;
	}
	public function getPassword(){
		return $this->identity;
	}
	public function isEmpty(){
		if(empty($this->identity) || empty($this->password))
			return true;
		return false;
	}
	public function getError(){
		return $this->error;
	}
	/**
	 * Hashes the password to be stored in the database.
	 *
	 * @return void
	 * @author Mathew
	 **/
	public function hash_password($password)
	{
		if (empty($password)){
			return FALSE;
		}
		//bcrypt
		return $this->bcrypt->hash($password);
	}
	/**
	 * Generates a random salt value for forgotten passwords or any other keys. Uses SHA1.
	 *
	 * @return void
	 * @author Mathew
	 **/
	public function hash_password_sha1($password)
	{
		if (empty($password)){
			return FALSE;
		}
		$salt = $this->salt();
		return  $salt . substr(sha1($salt . $password), 0, -$this->salt_length);
	}
	/**
	 * This function takes a password and validates it
	 * against an entry in the users table.
	 *
	 * @return bool
	 **/
	public function validate_hash_password($hashed_password, $salt){
		if (empty($hashed_password)){
			return FALSE;
		}
		if ($this->bcrypt->verify($this->password,$hashed_password)){
			return TRUE;
		}
		return FALSE;
	}
	/*  
		This function assumes that $identity and $password are not null
		Login function checks against user database for usernname then 
		checks password wish encryption
	*/
	public function login()
	{
		if(!filter_var($this->identity, FILTER_VALIDATE_EMAIL)){
			$this->error = "Email is not valid";
			return FALSE;		
		}
		$user = R::findOne('users',' email = ? ',array($this->identity));  //Depending on what the user wants, it could be username or email
		if (empty($user)){
			$this->error = "Email not found";
			return FALSE;
		}
		//successful username found, password test	
		if ($this->validate_hash_password($user->password, $user->salt)){
			if ($user->active == 0){
				$this->error = "Account is not active";
				return FALSE;
			}
			//Success!
			$user->last_login = time();
			return TRUE;
		}
		$this->error = "Password Incorrect.";
	}
	/*
		This function checks to see if the email is already in the database 
		If email is not in the database, it is available and function returns true
	*/
	public function email_available()
	{
		if (empty($this->identity)){
			return FALSE;
		}
		$user = R::findOne('users',' email = ? ',array($this->identity));
		if(is_null($user))
			return true;
		return false; 		//if email exists, then return false
	}
	
	/**
	 * Generates a random salt value.
	 *
	 * @return void
	 * @author Mathew
	 **/
	public function salt()
	{
		return substr(md5(uniqid(rand(), true)), 0, 10); //10 is salt length
	}
	
	/*
		This function creates a user 
	*/
	public function createUser($first_name, $last_name, $company = '', $phone = '', $group){
		if(!filter_var($this->identity, FILTER_VALIDATE_EMAIL)){
			$this->error = "Email is not valid";
			return FALSE;		
		}
		if(!filter_var($first_name, FILTER_SANITIZE_STRING)){
			$this->error = "First name is not valid";
			return FALSE;		
		}
		if(!filter_var($last_name, FILTER_SANITIZE_STRING)){
			$this->error = "Last name is not valid";
			return FALSE;		
		}
		if(!empty($company) && !filter_var($company, FILTER_SANITIZE_STRING)){
			$this->error = "Company name is not valid";
			return FALSE;		
		}
		if(!empty($phone) && !filter_var($phone, FILTER_SANITIZE_STRING)){
			$this->error = "Phone is not valid";
			return FALSE;		
		}
		if(!$this->email_available()){
			$this->error = "Email is already in use!";
			return FALSE;
		}
		
		$newUser = R::dispense('users');
		$newUser->ip_address = $_SERVER['REMOTE_ADDR'];
		$newUser->username = $this->identity;
		$newUser->password = $this->hash_password($this->password);
		$newUser->salt = $this->salt();
		$newUser->email = $this->identity;
		$newUser->created_on = time();
		$newUser->last_login = time();
		$newUser->first_name = $first_name;
		$newUser->last_name = $last_name;
		$newUser->phone = $phone;
		$newUser->company = $company;
		$newUser->active = 1;
		$id = R::store($newUser);
		if (!empty($group)){
			$newgroup = R::dispense('groupmap');
			$newgroup->user_id = $id;
			$newgroup->group_id = $group;
			R::store($newgroup);
		}
		return TRUE;
	}
	public function fogottenPassword(){
		if($this->email_available()){
			$this->error = "Email does not exist.";
			return FALSE;
		}
		//Add tons of randomness for the password link
		$activation_code_part = openssl_random_pseudo_bytes(128);  //php >= 5.3
		for($i=0;$i<1024;$i++) {
			$activation_code_part = sha1($activation_code_part . mt_rand() . microtime());
		}
		$key = $this->hash_password_sha1($activation_code_part.$this->identity);
		$user = R::findOne('users',' email = ? ',array($this->identity));
		$user->forgotten_password_code = $key;
		$user->forgotten_password_time = time();
		R::store($user);
		
		/*if(!$this->mailTemplate("Email Test","this is a test email")){
			//$this->error = "Could not send activation code. Please contact our technical support staff as soon as possible.";
			return FALSE;
		}*/
		$message = "Line 1\r\nLine 2\r\nLine 3";

		// In case any of our lines are larger than 70 characters, we should use wordwrap()
		$message = wordwrap($message, 70, "\r\n");
		
		// Send
		mail('sean.alan.thomas@gamil.com', 'My Subject', $message);
		return TRUE;
	}
	
	public function mailTemplate($subject='', $body='', $headers='From: support@learnstructure.com') {
    // Create the message body and subject
    // Send the mail(s)
    	new mail($this->identity, $subject, $body, $headers);
    // Return true for success
    return TRUE;
}
		
}

?>