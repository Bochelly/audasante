<?php global $page_en_cours; $page_en_cours = 'accueil'; ?>

<!DOCTYPE html>


<html>


<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="../CSS/style-assistance.css" />
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


	<script src="../js/script.js"></script>
</body>
</html>

