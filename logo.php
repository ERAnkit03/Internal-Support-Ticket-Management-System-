<?php

// Use Noop Session Handler
define('NOOP_SESSION', true);
require('client.inc.php');
$ttl = 86400; // max-age
if (($logo = $ost->getConfig()->getClientLogo())) {
    $logo->display(false, $ttl);
}

header("Cache-Control: private, max-age=$ttl");
header('Pragma: private');
header('Location: '.ASSETS_PATH.'images/logo.png');
?>
