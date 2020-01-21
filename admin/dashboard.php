<?php $page_en_cours = 'dashboard';
session_start(); 
require('../config.php');
require('sécurité_médecin.php');
?>

<!DOCTYPE html>


<html>


<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="../CSS/style.css" />


    <!-- Latest compiled and minified plotly.js JavaScript -->
    <script src="../js/plotty.js"></script>


	<link rel="stylesheet" href="../CSS/style-dashboard.css"/>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'> <!--Permet de telecharger la police Source sans pro -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous"> <!-- Permet d'utiliser les émoticions de fontawesome -->
	<title>Audasanté</title>
</head>


<body>
	<header><h1>AUDASANTÉ</h1></header>
	<h2> Donées live </h2>

	<?php
		require('menu_lateral_admin.php');
		require('top_bar.php')
	?>



	<div class='dashboard'> 
        <div id = "plot-temp"></div>
        <div id = "plot-card"></div>
	</div>
	
	<script src="../js/script.js"></script>
</body>

</html>