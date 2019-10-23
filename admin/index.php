<!DOCTYPE html>


<html>


<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="../CSS/style.css" />
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'> <!--Permet de telecharger la police Source sans pro -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous"> <!-- Permet d'utiliser les émoticions de fontawesome -->
	<title>Audasanté</title>
</head>


<body>
	<header><h1>AUDASANTÉ</h1></header>


	<?php
		require('menu_lateral_admin.php');
	?>

	<div id='top-bar'>
		<ul>
			<form autocomplete="off" >
				<div class="autocomplete">
					<li id="search-field"><i class="fas fa-search" style="color:#A5A4BF;"></i>
						<input id="search-text" type="text" name="search-bar" placeholder="Recherchez un patient, un test ou un message">
						<input type="submit" hidden>
					</li>
				</div>
			</form>
			<li id="top-photo"><a href="#"> nom profil <img src="photo profil.jpg" title="profil" alt="photo"></a> </li>
			<li id="top-assist"> <a href="Assistance.html"><i class="far fa-question-circle fa-lg fa-fw" style="color:#A5A4BF;" title="assistance"> </i></a> </li>
			<li id="top-messagerie"><a href="Messages.html"><i class="fas fa-envelope fa-lg fa-fw" style="color:#A5A4BF;" title="messagerie"> </i></a> </li>
			<li id="top-notif"><a href="#"><i class="far fa-bell fa-lg fa-fw" style="color:#A5A4BF;" title="afficher liste des notifs"> </i></a></li>

		</ul>
	</div>

	<script src="../js/script.js"></script>
</body>
</html>

