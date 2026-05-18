<?php

if(!strcasecmp(basename($_SERVER['SCRIPT_NAME']),basename(__FILE__))) die('Kwaheri!');
if(!file_exists('client.inc.php')) die('Fatal Error.');
require_once('client.inc.php');

//Client Login page: Ajax interface can pre-declare the function to trap logins.
if(!function_exists('clientLoginPage')) {
    function clientLoginPage($msg ='') {
        global $ost, $cfg, $nav;
        $_SESSION['_client']['auth']['dest'] =
            '/' . ltrim($_SERVER['REQUEST_URI'], '/');
        require('./login.php');
        exit;
    }
}

//User must be logged in!
if(!$thisclient || !$thisclient->getId() || !$thisclient->isValid()){
    clientLoginPage();
    exit;
}
$thisclient->refreshSession();
?>
