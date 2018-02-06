<?php 

require_once 'config.php';
unset($_SESSION['access_token']);
$g_client->revokeToken();
session_destroy();
header("location: login.php");
exit();