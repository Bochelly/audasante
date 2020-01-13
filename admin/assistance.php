<?php $page_en_cours = 'assistance'; 
session_start(); // On démarre la session AVANT toute chose
?>

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

	<a class="bouton_mail" href="#mail"><div> Envoyez-nous un mail ! </div></a>
	<div id="mail"> 
			<li id='close'><a href=''><i class="far fa-times-circle fa-lg fa-fw"></i></a></li>
			<h3>Contactez nous !</h3>
			<br/><br/>
			<form method="post" action="traitement_mail_contact.php">
				<p> 
					<label for="email">Email</label><input type="text" name="email" required/><br/>
					<p class="dessous">Nous vous contacterons à cette adresse</p>
					<label for="objet">Objet</label><input type="text" name="objet" required/><br/>
					<p class="dessous">Indiquez la raison de votre demande</p>
					<label for="message">Message</label><textarea name="message" rows=11 placeholder="Tapez votre message ici..." required></textarea><br/>
					<?php 
						if(isset($_SESSION['message_mail']))
						{
							echo "<p>".$_SESSION['message_mail']."</p>";
						}
						else { echo "<br/>";}
					?>
					<span><input type="submit" name="envoi" value="Envoyer	" /></span>

				</p>
			</form>
	</div>

	<div id="contact">
		<h3>Communauté</h3>
		<ul>
			<a href="faq" ><li id="faq"><i class="fas fa-question fa-fw fa-2x" style="color: #E8E8EB"></i>Foire Aux Questions</li></a>
			<li><i class="fas fa-map-marker-alt fa-fw fa-2x" style="color: #D2323F"></i> 10, rue de Vanves à Issy-les-Moulinaux</li>
				<li><i class="fas fa-phone-square-alt fa-fw fa-2x" style="color: #72B239"></i> 0100000000</li>
				<li><i class="fas fa-at fa-fw fa-2x" style="color: #156080"></i> Audasanté@gmail.com</li>
			<li><i class="fab fa-facebook fa-fw fa-2x" style="color: #4267B2"></i> Audasanté</li>
			<li><i class="fab fa-instagram fa-fw fa-2x" style="color: #BE2866"></i> Audasanté</li>
			<li><i class="fab fa-twitter-square fa-fw fa-2x" style="color: #00A7E1"></i> Audasanté</li>

		</ul>
	</div>

	</div>
	<script src="../js/script.js"></script>
</body>
</html>