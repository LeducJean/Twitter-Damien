<?php
require_once('connexion.php');

// Check if form is submitted for login or registration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	session_start();
	$connexion = new Connexion("192.168.65.126", "roott", "root", "connexion");

	// Login
	if (isset($_POST["connexion"])) {
		$email = $_POST["logemail"];
		$password = $_POST["logpass"];
		$connexion->login($email, $password);
	}

	// Registration
	if (isset($_POST["inscription"])) {
		$name = $_POST["logname"];
		$email = $_POST["logemail"];
		$password = $_POST["logpass"];
		$connexion->register($name, $email, $password);
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>login</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
	<link rel="stylesheet" href="indexstyle.css">
	<link rel="stylesheet" href="connexionstylee.css">
	<link rel="stylesheet" href="style.css">
</head>

</html>