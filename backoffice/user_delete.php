<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 /> 
  <title>Connexion</title>
  <link rel="stylesheet" href="css/style-connect.css" media="screen"/>
  <link rel="icon" type="image/png" href="css/img/audalogo.png" />
</head>

<body>

<?php
//on vérifie qu'on ai bien toute les informatoins d'inscriptions
  if(!isset($_POST['n_secu']))
  {
  	echo("Erreur dans les paramètres envoyés !!!!!!");
    //$error_type = "nolog";
    //header('Location: index.php?error_type='.$error_type.'');
    exit();
  }
  else
  {
  	echo("Changement en cours.");
  	require('config.php'); // On réclame le fichier config

		$n_secu = $_POST['n_secu'];

		$requete_1 = $bdd->query("DELETE FROM user WHERE n_secu='".$n_secu."'")->fetch();
		header('Location: users-admin.php');

		exit();

  }
?>