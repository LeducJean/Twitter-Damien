<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>login</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
	<link rel="stylesheet" href="indexstyle.css">
	<link rel="stylesheet" href="connexionstylee.css">
</head>

<body>
	<?php
	// Check if form is submitted for login or registration
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		session_start();
		$servername = "192.168.65.126";
		$username = "roott";
		$password = "root";
		$dbname = "connexion";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		// Login
		if (isset($_POST["connexion"])) {
			$email = $_POST["logemail"];
			$password = $_POST["logpass"];
			$sql = "SELECT * FROM user WHERE logemail='$email' AND logpass='$password'";
			$result = $conn->query($sql);
			if ($result->num_rows == 1) {
				$row = $result->fetch_assoc();
				$_SESSION["userId"] = $row["id"];
				$_SESSION["logname"] = $row["logname"];
				header("Location: page.php");
				exit();
			} else {
				echo "Invalid email or password.";
			}
		}
		// Registration
		if (isset($_POST["inscription"])) {
			$name = $_POST["logname"];
			$email = $_POST["logemail"];
			$password = $_POST["logpass"];
			$sql = "INSERT INTO user (logname, logemail, logpass) VALUES ('$name', '$email', '$password')";
			if ($conn->query($sql) === TRUE) {
				header("Location: page.php");
				exit();
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		$conn->close();
	}
	?>
	<div class="section">
		<canvas id="canvas"></canvas>

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
													<input type="password" name="logpass" class="form-style"
														placeholder="Mot de passe" id="logpass" autocomplete="off">
													<i class="input-icon uil uil-lock-alt"></i>
												</div>
												<div class="form-group">
													<button type="submit" name="connexion"
														class="btn mt-4">Connexion</button>
												</div>
											</form>
											<p class="mb-0 mt-4 text-center">Vous n'avez pas encore de compte ? <a
													href="#" class="text-danger" id="log-reg-btn">Inscrivez-vous</a></p>
										</div>
									</div>
								</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Inscription</h4>
											<form action="" method="post">
												<div class="form-group">
													<input type="text" name="logname" class="form-style"
														placeholder="Nom d'utilisateur" id="logname" autocomplete="off">
													<i class="input-icon uil uil-user"></i>
												</div>
												<div class="form-group">
													<input type="email" name="logemail" class="form-style"
														placeholder="Email" id="logemail2" autocomplete="off">
													<i class="input-icon uil uil-at"></i>
												</div>
												<div class="form-group">
													<input type="password" name="logpass" class="form-style"
														placeholder="Mot de passe" id="logpass2" autocomplete="off">
													<i class="input-icon uil uil-lock-alt"></i>
												</div>
												<div class="form-group">
													<button type="submit" name="inscription"
														class="btn mt-4">Inscription</button>
												</div>
											</form>
											<p class="mb-0 mt-4 text-center">Vous avez déjà un compte ? <a href="#"
													class="text-danger" id="reg-log-btn">Connectez-vous</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js'></script>
	<script src="paillettesouris.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/101/three.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/dat-gui/0.7.5/dat.gui.min.js'></script>
	<script type="module" src="paillettesouris.js"></script>

</body>

</html>
