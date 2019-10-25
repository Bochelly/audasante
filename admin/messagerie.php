<!DOCTYPE html>


<html>


<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="../CSS/style.css" />
	<link rel="stylesheet" href="../CSS/style-messagerie.css" />
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'> <!--Permet de telecharger la police Source sans pro -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous"> <!-- Permet d'utiliser les émoticions de fontawesome -->
	<title>Audasanté</title>
</head>


<body>an
	<header><h1>AUDASANTÉ</h1></header>


	<?php
		require('menu_lateral_admin.php');
		require('top_bar.php')
	?>
	<h2>Messages</h2>
	<div class="main-section">
		<div class="head-section">
			<div class="headRight-section">
				<div class="headRight-sub">
					<h3>Antoine Borrelly</h3>
					<small>Votre médecin est disponible pour répondre à toutes vos questions.</small>
				</div>
			</div>
		</div>
		<div class="body-section">
			<div class="right-section">
				<div class="message mCustomScrollbar" data-mcs-theme="minimal-dark">
					<ul>
						<li class="msg-left">
							<div class="msg-left-sub">
								<img src="../images/messagerie/patient.jpg">
								<div class="msg-desc">
									Bonjour docteur, mon anus me démange beaucoup depuis notre dernière opération. Est-ce normal ?
								</div>
								<small>05:25 am</small>
							</div>
						</li>
						<li class="msg-right">
							<div class="msg-left-sub">
								<img src="../images/messagerie/docteur.jpg">
								<div class="msg-desc">
									Bonjour Aude. Laissez moi me renseigner.
								</div>
								<small>05:25 am</small>
							</div>
						</li>
						<li class="msg-day"><small>Wednesday</small></li>
						<li class="msg-left">
							<div class="msg-left-sub">
								<img src="../images/messagerie/patient.jpg">
								<div class="msg-desc">
								C'est de pire en pire espèce de gros fdp. Répond-moi !
								</div>
								<small>05:25 am</small>
							</div>
						</li>
						<li class="msg-right">
							<div class="msg-left-sub">
								<img src="../images/messagerie/docteur.jpg">
								<div class="msg-desc">
									Bonjour Aude, vous devez comprendre que la procédure employée est très... particulière. Rien d'anormal ici.
								</div>
								<small>05:25 am</small>
							</div>
						</li>
						<li class="msg-left">
							<div class="msg-left-sub">
								<img src="../images/messagerie/patient.jpg">
								<div class="msg-desc">
									Je m'en doutais ! Vous êtes un charlatan !!
								</div>
								<small>05:25 am</small>
							</div>
						</li>
						<li class="msg-right">
							<div class="msg-left-sub">
								<img src="../images/messagerie/docteur.jpg">
								<div class="msg-desc">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua.
								</div>
								<small>05:25 am</small>
							</div>
						</li>
		
					</ul>
				</div>
				<div class="right-section-bottom">
					<form>
						<div class="upload-btn">
						  	<button class="btn"><i class="fa fa-photo"></i></button>
						  	<input type="file" name="myfile" />
						</div>
						<input type="text" name="" placeholder="type here...">
						<button class="btn-send"><i class="fa fa-send"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>
	


	<script src="../js/script.js"></script>
</body>
</html>

