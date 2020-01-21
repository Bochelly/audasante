<?php
require('../config.php');

if (!$_SESSION['connected']) { 
	$error_type = "notlogged";
	header('Location: ../index.php?error_type='.$error_type.'');
	exit();
}

$profil = $bdd->query('SELECT * FROM user WHERE n_secu='.$_SESSION["n_secu"].'');
$dataprofil = $profil->fetch();

?>

