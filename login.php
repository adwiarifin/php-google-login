<?php 
	require_once "config.php";

	if(isset($_SESION['access_token'])) {
		header("location: index.php");
		exit();
	}

	$loginURL = $g_client->createAuthUrl();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login with Google</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="margin-top: 100px">
		<div class="row justify-content-center">
			<div class="col-md-6 col-offset-3" align="center">
				
				<img src="images/logo.png"><br><br>

				<form>
					<input type="text" name="email" placeholder="Email..." class="form-control"><br>
					<input type="password" name="password" placeholder="Password..." class="form-control"><br>
					<input type="submit" value="Log In" class="btn btn-primary">
					<input type="button" value="Log In with Google" class="btn btn-danger" onclick="window.location='<?php echo $loginURL; ?>'">
				</form>

			</div>
		</div>
	</div>
</body>
</html>