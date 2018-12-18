<?php
error_reporting(0);

$GLOBALS['config'] = array(
    
    'mysql' => array(
         'host' => '127.0.0.1',
         'username' => 'root',
         'password' => '',
         'db' => 'pickup_db'
     ),
    'session' => array(
        'session_name' => 'user',
        'token_name' => 'token'
    )
);
spl_autoload_register(function($class) {
    require_once 'classes/' . $class . '.php';
});
require_once 'functions/functions.php';
?>