<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: connexion.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style1.css" rel="stylesheet" type="text/css">

	</head>
	<body class="home" >
			<div>
				<h1>Website Title</h1>
				<a href="logout.php"> <i class="logout"></i>Logout</a>
			</div>


		</div>
	</body>
</html>
