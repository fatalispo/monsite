<!DOCTYPE html>
<html lang="fr">
	<head>
	    <meta name="author" content="Benjamin Dumay"/>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="shortcut icon" type="image/x-icon" href="image/benjamindumay.png"/>
		<title>Me contacter</title>
	</head>

	<body>
		
		<?php include("menus.php");?>

		<form method="POST" action="traitement_contact.php">
			<legend>Formulaire de mise en relationS</legend>
				<p>
					<label for="nom">Nom</label>
					<input type="text" name="nom" id="nom" placeholder="DUPONT">
				</p>
				<p>
					<label for="prenom">Prénom</label>
					<input type="text" name="nom" id="prenom" placeholder="Jean">
				</p>
				<p>
					<label for="email">E-mail</label>
					<input type="email" name="nom" id="email" placeholder="example@nimportequoi.ca">
				</p>
				<p>
					<label for="objet">Objet :</label>
					<input type="text" name="nom" id="objet" placeholder="Un site ...">
				</p>
				<textarea rows="20" cols="110" name="message" id="message" placeholder="..."></textarea><br />
				<p>
				<input type="submit" value="Envoyer" />
				</p>
		</form>

	</body>
</html>