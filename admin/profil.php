<?php $page_en_cours = 'patients';
session_start(); // On démarre la session AVANT toute chose
require('../config.php');

if (! $_SESSION['connected'] ) { 
	header('Location: ../index.php');
	exit();
};


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
		$profil = $bdd->query('SELECT * FROM user WHERE n_secu='.$_SESSION["n_secu"].'');
	?>

	<div id="profil">



	</div>



	<script src="../js/script.js"></script>
</body>
</html>