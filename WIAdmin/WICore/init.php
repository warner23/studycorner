<?php

ini_set('display_errors',1);
error_reporting(E_ALL);


require 'WIClass/WI.php';

$token = $register->socialToken();
WISession::set('WI_social_token', $token);
$register->botProtection();


spl_autoload_register(function($class)
{
	require_once 'WIClass/' . $class . '.php';
});




$user         = new WIUser(WISession::get("user_id"));
$userInfo     = $user->getInfo();
$userDetails  = $user->getDetails();

//$help   = new WIHelplines();
$Info   = new WIUserInfo();
$web   = new WIWebsite();
$site = new WISite();

require 'WILib.php';

$module = new WIModules();
$page = new WIPage();
$web  = new WIWebsite();
$upload = new WIUploads();
$cont  = new WIContacts();






?>
