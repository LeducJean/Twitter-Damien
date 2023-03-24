<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>login</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
	<link rel="stylesheet" href="indexstyle.css">

</head>

<body>
	<?php
	$ipserver = "192.168.64.57";
	$nomBase = "connexion";
	$loginPrivilege = "root";
	$passPrivilege = "root";

	try {
		$GLOBALS["pdo"] = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);
	} catch (Exception $e) {
		echo $e->getMessage();
	}


	if (isset($_SESSION["connexion"]) && $_SESSION["connexion"] == true) {
		echo "je suis déjà connecté !!!!";
	}


	session_start(); //Initialisation de la session utilisateur
	



	if (isset($_POST["connexion"])) //Si le bouton de connexion est selectionné
	{

		$host = "192.168.64.57"; // Adresse IP //
		$username = "root"; // Username   //
		$password = "root"; // Password   //
		$dbname = "connexion"; // Nom base   //
	
		$conn = mysqli_connect($host, $username, $password, $dbname);

		$user = $_POST["logemail"];
		$pass = $_POST["logpass"];

		$query = "SELECT * FROM user WHERE logemail='$user' AND logpass='$pass'";
		$result = mysqli_query($conn, $query);
		$row = mysqli_fetch_assoc($result);


		// Si un utilisateur est trouvé avec les informations de connexion données
		if (mysqli_num_rows($result) > 0) {


			header('Location: page.php');


		} else {
			echo "information introuvable";
		}




	}


	?>


	<div class="section">
		<!DOCTYPE html>
		<html lang="en">

		<head>
			<meta charset="UTF-8">
			<title></title>
			<link rel="stylesheet" href="connexionstylee.css">

		</head>

		<body>
			<!-- partial:index.partial.html -->
			<canvas id="canvas"></canvas>
			<!-- partial -->



			<div class="container">
				<div class="row full-height justify-content-center">
					<div class="col-12 text-center align-self-center py-5">
						<div class="section pb-5 pt-5 pt-sm-2 text-center">
							<h6 class="mb-0 pb-3"><span>Connexion </span><span>Inscrit-toi</span></h6>
							<input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
							<label for="reg-log"></label>
							<div class="card-3d-wrap mx-auto">
								<div class="card-3d-wrapper">
									<div class="card-front">
										<div class="center-wrap">
											<div class="section text-center">
												<h4 class="mb-4 pb-3">Connexion</h4>
												<form action="" method="post">
													<div class="form-group">
														<input type="email" name="logemail" class="form-style"
															placeholder="Email" id="logemail" autocomplete="off">
														<i class="input-icon uil uil-at"></i>
													</div>
													<div class="form-group mt-2">
														<input type="password" name="logpass" class="form-style"
															placeholder="MotDePasse" id="logpass" autocomplete="off">
														<i class="input-icon uil uil-lock-alt"></i>
													</div>
													<input type="submit" class="btn mt-4" name="connexion"
														value="Connectez-vous"></input>
													<p class="mb-0 mt-4 text-center"><a href="#0" class="link">Mot de
															passe
															oublier ?</a></p>
												</form>
											</div>

										</div>

									</div>
									<div class="card-back">
										<form action="" method="post">
											<div class="center-wrap">
												<div class="section text-center">
													<h4 class="mb-4 pb-3">inscription</h4>
													<div class="form-group">
														<input type="text" name="logname" class="form-style"
															placeholder="Pseudo" id="logname" autocomplete="off">
														<i class="input-icon uil uil-user"></i>
													</div>
													<div class="form-group mt-2">
														<input type="email" name="logemail" class="form-style"
															placeholder="Email" id="logemail" autocomplete="off">
														<i class="input-icon uil uil-at"></i>
													</div>
													<div class="form-group mt-2">
														<input type="password" name="logpass" class="form-style"
															placeholder="MotDePasse" id="logpass" autocomplete="off">
														<i class="input-icon uil uil-lock-alt"></i>
													</div>
													<input type="submit" class="btn mt-4" name="inscription"
														value="Inscription"></input>
												</div>
												<form action="page.php" method="post">
											</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</body>

		</html>
	</div>
	<?php

	if (isset($_POST["inscription"])) {
		$requeteUser = "INSERT INTO `user` (`logname`, `logemail`, `logpass`) VALUES ('" . $_POST['logname'] . "','" . $_POST['logemail'] . "','" . $_POST['logpass'] . "')";

		$result2 = $GLOBALS["pdo"]->query($requeteUser);
	}

	?>

	<script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/101/three.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/dat-gui/0.7.5/dat.gui.min.js'></script>
	<script type="module" src="paillettesouris.js"></script>

</body>

</html>