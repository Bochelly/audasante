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
  if(!isset($_POST['first_name']) || !isset($_POST['last_name'])|| !isset($_POST['n_secu'])|| !isset($_POST['e_mail']))
  {
  	echo("Erreur dans les paramètres enoyés !!!!!!");
    //$error_type = "nolog";
    //header('Location: index.php?error_type='.$error_type.'');
    exit();
  }
  else
  {
  	echo("Changement en cours.");
  	require('config.php'); // On réclame le fichier config

		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$n_secu = $_POST['n_secu'];
		$e_mail = $_POST['e_mail'];
		
		$requete_1 = $bdd->query("UPDATE user SET last_name='".$last_name."' WHERE n_secu='".$n_secu."'")->fetch();
		$requete_2 = $bdd->query("UPDATE user SET first_name='".$first_name."' WHERE n_secu='".$n_secu."'")->fetch();
		$requete_3 = $bdd->query("UPDATE user SET e_mail='".$e_mail."' WHERE n_secu='".$n_secu."'")->fetch();
		$requete_4 = $bdd->query("UPDATE user SET n_secu='".$n_secu."' WHERE n_secu='".$n_secu."'")->fetch(); //ne sert à rien lol

		header('Location: users-admin.php');

		exit();

  }
?>