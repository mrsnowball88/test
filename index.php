<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

spl_autoload_register(function($class) {
    $path = '';
    $fixLocalhost = $class;
   	$fixLocalhost = str_replace('\\', '/',$class);
    require($_SERVER["DOCUMENT_ROOT"].'/'.$fixLocalhost.'.php' );
});

$routes = require  './config/routes.php';
$track  = \Core\Route::Go($routes, $_SERVER['REQUEST_URI']);


