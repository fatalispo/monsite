<!DOCTYPE html>
<html lang="fr">
	<head>
	    <meta name="author" content="Benjamin Dumay"/>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="image/benjamindumay.png"/>
		<title>Me contacter</title>
	</head>

	<body>
		
		<?php include("menus.php");?>

		<form method="post" action="mailto:benjamindumay@protonmail.com" name="contact"> <!--envoi du formulaire primaire et incomplet car apprentissage php en cours-->
		<br/>
			<legend><center>Formulaire de mise en relation</center></legend>
		<br/>
				<p>
					<input type="text" name="nom" id="nom" placeholder="Nom">
				</p>
				<p>
					<input type="text" name="prenom" id="prenom" placeholder="Prénom">
				</p>
				<p>
					<input type="email" name="emeil" id="email" placeholder="adresse@email.com">
				</p>
				<p>
					<input type="text" name="objet" id="objet" placeholder="Objet">
				</p>
		<br/>
				<textarea rows="30" cols="210" name="message" id="zonetexte" placeholder="Ecrivez votre message ici"></textarea><br />
				<p><center>
				<input type="reset" name="reset" value="Réinitialiser">
				<input type="submit" name="envoyer" value="Envoyer" />
				</center></p>
		</form>

	</body>
</html>