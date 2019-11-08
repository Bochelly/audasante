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
	<div id="contenuAssistance">	
	<h2>Besoin d'aide ?</h2>
	<p>Vous avez une question ? La réponse se trouve probablement dans notre foire aux questions !</p>
	<p><a href="#">Foire Aux Questions</a></p>
	<br>
	<hr>
	<h2>Contactez nous !</h2>

	<div id="mail"> 
			Vous avez une question à laquelle notre F.A.Q ne répond pas ?<br/>
			Ecrivez nous un mail simplement ici :
			<br/><br/>
			<form method="post" action="traitement_formulaire.php">
				<p> 
					<label for="email">Votre e-mail :</label><br/><input type="text" name="email" id="email"/><br/>
					<label for="objet">L'objet :</label><br/><input type="text" name="objet" id="objet"/><br/>
					<label for="message"> Votre message </label>:<br/><textarea name="message" id="message"></textarea><br/>
					<input type="submit" name="envoi" value="Envoyez nous un mail !" />

				</p>
			</form>
	</div>

	<div id="contact">
		<ul>
			<li><i class="fas fa-map-marker-alt fa-fw fa-2x"></i> yo j'habite 171 reue saint maur</li>
				<li><i class="fas fa-phone-square-alt fa-fw fa-2x"></i> 06 08 41 38 42 ;)</li>
				<li><i class="fas fa-at fa-fw fa-2x"></i> felixnedelec@gmail.com</li>
			<li><i class="fab fa-facebook fa-fw fa-2x"></i> felix nedelec</li>
			<li><i class="fab fa-instagram fa-fw fa-2x"></i> felixndlc</li>

		</ul>
	</div>

	</div>
	<script src="../js/script.js"></script>
</body>
</html>