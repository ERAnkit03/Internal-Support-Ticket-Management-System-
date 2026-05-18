<?php


require('client.inc.php');
//Check token: Make sure the user actually clicked on the link to logout.
if ($thisclient && $_GET['auth'] && $ost->validateLinkToken($_GET['auth']))
   $thisclient->logOut();

osTicketSession::destroyCookie();
session_destroy();
Http::redirect('index.php');
?>
