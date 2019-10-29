<!DOCTYPE html>


<html>


<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="../CSS/style.css" />
	<link rel="stylesheet" href="../CSS/style-assistance.css"/>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'> <!--Permet de telecharger la police Source sans pro -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous"> <!-- Permet d'utiliser les émoticions de fontawesome -->
	<title>Audasanté</title>
</head>


<body>
	<header><h1>AUDASANTÉ</h1></header>
	<?php
		require('menu_lateral_admin.php');
		require('top_bar.php')
	?>
	
	<div id="formulaire_contact"> 
		<p>
			<h2>Contactez nous !</h2>
			Vous avez une question à laquelle notre F.A.Q ne répond pas ?<br/>
			Ecrivez nous un mail simplement ici :
			<br/><br/>
			<form method="post" action="traitement_formulaire.php">
				<p> 
					<label for="email">Votre e-mail :</label><br/><input type="text" name="email" id="email"/><br/>
					<label for="objet">L'objet :</label><br/><input type="text" name="objet" id="objet"/><br/>
					<label for="message"> Votre message </label>:<br/><textarea name="message" id="message"></textarea><br/>

				</p>
			</form>
		</p>
	</div>



	<script src="../js/script.js"></script>
</body>
</html>