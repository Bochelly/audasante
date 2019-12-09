<?php $page_en_cours = 'patients';
require('../config.php');
session_start(); // On démarre la session AVANT toute chose
 ?>

<!DOCTYPE html>


<html>


<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="../CSS/style.css" />
	<link rel="stylesheet" href="../CSS/patients-style.css"/>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'> <!--Permet de telecharger la police Source sans pro -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous"> <!-- Permet d'utiliser les émoticions de fontawesome -->
	<title>Audasanté</title>
</head>


<body>
	<header><h1>AUDASANTÉ</h1></header>

	<?php
		require('menu_lateral_admin.php');
		require('top_bar.php');
		$patients = $bdd->query('SELECT first_name, last_name, birth_date, e_mail FROM user WHERE n_secu_medic='.$_SESSION["n_secu"].'');
	?>	




	<script src="../js/script.js"></script>
</body>
</html>