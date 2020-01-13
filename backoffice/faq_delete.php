<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 /> 
  <title>FAQ delete</title>
  <link rel="stylesheet" href="css/style-connect.css" media="screen"/>
  <link rel="icon" type="image/png" href="css/img/audalogo.png" />
</head>

<body>

<?php
//on vérifie qu'on ai bien toute les informatoins d'inscriptions
  if(!isset($_POST['id']))
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

		$id = $_POST['id'];

		$requete_1 = $bdd->query("DELETE FROM faq WHERE id='".$id."'")->fetch();
		header('Location: faq-admin.php');

		exit();

  }
?>