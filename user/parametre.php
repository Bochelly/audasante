<?php $page_en_cours = 'parametre'; 
session_start(); // On démarre la session AVANT toute chose
require('securite_user.php');
?>

<!DOCTYPE html>


<html>


<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="../CSS/style.css" />
	<link rel="stylesheet" href="../CSS/parametre.css"/>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'> <!--Permet de telecharger la police Source sans pro -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous"> <!-- Permet d'utiliser les émoticions de fontawesome -->
	<title>Audasanté</title>
</head>


<body>
	<header><h1>AUDASANTÉ</h1></header>

	<?php
		require('menu_lateral_user.php');
		require('top_bar.php');
	?>	

	<?php
	if ($dataprofil['super_user'] == 1) {
	echo "<a id='BO' href='../backoffice/index.php'> Lien vers le Back Office </a>";
	}
	?>

	<?php
	if ($dataprofil['medic'] == 1) {
	echo "<a id='sitePatient' href='../admin/index.php'> Lien vers l'interface médecin</a>";
	}
	?>
	



	<a id='CGU' href='../cgu.php'>CGU et mentions légales</a>

	

</body>
</html>