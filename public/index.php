<?php

//require '../app/vendor/autoload.php';
//custom ORM library redbean loaded outside of composer
/*
// Prepare app



// Prepare view
$app->view(new \Slim\Views\Twig());
$app->view->parserOptions = array(
    'charset' => 'utf-8',
    'cache' => realpath('../app/templates/cache'),
    'auto_reload' => true,
    'strict_variables' => false,
    'autoescape' => true
);
$app->view->parserExtensions = array(new \Slim\Views\TwigExtension());
*/

require '../app/vendor/autoload.php';
//redbean ORM
require '../app/vendor/redbean/rb.php';
session_cache_limiter(false);
session_start();

// set up database connection
//R::setup('mysql:host=box398.bluehost.com;dbname=corritho_dev_slim','corritho_st362','vikings123!@#'); //host=box398.bluehost.com
R::setup('mysql:host=box398.bluehost.com;dbname=corritho_dev_slim','corritho_st362','vikings123!@#'); 
R::freeze(true);

/*\Slim\Route::setDefaultConditions(array(
  'id' => '[0-9]{1,}',
));*/


$app = new \Slim\Slim(array(
	    'templates.path' => '../app/templates',
		'cookies.httponly' => true,
		'cookies.encrypt' => true
	));

$app->view(new \Slim\Views\Twig());
$app->view->parserExtensions = array(new \Slim\Views\TwigExtension());
$app->view->parserOptions = array(
    'charset' => 'utf-8',
    'cache' => realpath('../app/templates/cache'),
    'auto_reload' => true,
    'strict_variables' => false,
    'autoescape' => true
);
require '../app/routes/authentication.php';
require '../app/routes/examples.php';

$twig = $app->view()->getEnvironment();
/*$function = new Twig_SimpleFunction('var_dump', function () {
    echo var_dump();
});
$twig->addFunction($function);*/


$app->run();
?>
