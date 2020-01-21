<?php
require('../config.php');

if (! $_SESSION['connected'] ) { 
	header('Location: ../index.php');
	exit();
}

	$profil = $bdd->query('SELECT * FROM user WHERE n_secu='.$_SESSION["n_secu"].'');
	$dataprofil = $profil->fetch();

if ($dataprofil['medic'] == false) {
	header('Location: ../index.php');
	exit();
}

};
