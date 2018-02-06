<?php 

require_once 'config.php';

if (isset($_SESSION['access_token'])) {
	$g_client->setAccessToken($_SESSION['access_token']);
} else if (isset($_GET['code'])) { 
	$token = $g_client->fetchAccessTokenWithAuthCode($_GET['code']);
	$_SESSION['access_token'] = $token;
} else {
	header("location: login.php");
	exit();
}

$oAuth = new Google_Service_Oauth2($g_client);
$userData = $oAuth->userinfo_v2_me->get();

$_SESSION['id'] = $userData['id'];
$_SESSION['email'] = $userData['email'];
$_SESSION['gender'] = $userData['gender'];
$_SESSION['picture'] = $userData['picture'];
$_SESSION['familyName'] = $userData['familyName'];
$_SESSION['givenName'] = $userData['givenName'];

header("location: index.php");
exit(); 