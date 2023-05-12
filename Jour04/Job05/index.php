<!DOCTYPE html>
<html>
<head>
	<title>Formulaire de connexion</title>
</head>
<body>
	<h1>Connexion</h1>
	<form method="post">
		<label for="username">Nom d'utilisateur :</label>
		<input type="text" id="username" name="username"><br>

		<label for="password">Mot de passe :</label>
		<input type="password" id="password" name="password"><br>

		<input type="submit" value="Se connecter">
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = $_POST["username"];
		$password = $_POST["password"];

		if ($username == "John" && $password == "Rambo") {
			echo "C'est pas ma guerre";
		} else {
			echo "Votre pire cauchemar";
		}
	}
	?>
</body>
</html>
