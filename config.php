<?php 
session_start();
require("vendor/autoload.php");

$g_client = new Google_Client();
$g_client->setClientId("507976255382-s5un57jhmipd02di2a4kip87hcb6ugpm.apps.googleusercontent.com");
$g_client->setClientSecret("zUR1wJX7Mg2z9srRN7ydSnKq");
$g_client->setRedirectUri("http://localhost/google-login/callback.php");
$g_client->setApplicationName("Kesatria Keyboard -  Google Login");
$g_client->setScopes("email");