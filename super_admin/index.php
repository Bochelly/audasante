<?php
session_start(); // On démarre la session AVANT toute chose
if (! $_SESSION['super_admin'] ) { 
    header('Location: ../index.php');
    exit();
};
?>
<!DOCTYPE html>


<html>


	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../CSS/style.css" />
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'> <!--Permet de telecharger la police Source sans pro -->
		<title>Audasanté</title>
	</head>


	<body>
		


	<body>
</html>
