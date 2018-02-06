<?php require("vendor/autoload.php");

// Step 1: Enter your google account credentials
$g_client = new Google_Client();

$g_client->setClientId("507976255382-s5un57jhmipd02di2a4kip87hcb6ugpm.apps.googleusercontent.com");
$g_client->setClientSecret("zUR1wJX7Mg2z9srRN7ydSnKq");
$g_client->setRedirectUri("http://localhost/google-login/google.php");
$g_client->setScopes("email");

// Step 2: Create the url
$auth_url = $g_client->createAuthUrl();
echo "<a href='$auth_url'>Login Through Google</a>";

// Step 3: Get the authorizatin code
$code = isset($_GET['code']) ? $_GET['code'] : NULL;

// Step 4: Get the access token
if(isset($code)) {
	try {
		$token = $g_client->fetchAccessTokenWithAuthCode($code);
		$g_client->setAccessToken($token);
	} catch(Exception $e) {
		echo $e->getMessage();
	}

	try {
		$pay_load = $g_client->verifyIdToken();
	} catch (Exception $e) {
		echo $e->getMessage();
	}
} else {
	$pay_load = null;
}

// step 5: do you stuff
if(isset($pay_load)) {
	echo $pay_load["email"];
}