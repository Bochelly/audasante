<?php $page_en_cours = 'parametre';
session_start(); // On démarre la session AVANT toute chose
require('../config.php');

if (! $_SESSION['connected'] ) { 
	header('Location: ../index.php');
	exit();
};

$profil = $bdd->query('SELECT * FROM user WHERE n_secu='.$_SESSION["n_secu"].'');
		$data = $profil->fetch();



if (isset($_POST['newnom']) and !empty($_POST['newnom']) and $_POST['newnom'] != $data['last_name'])
{
	$newnom = htmlspecialchars($_POST["newnom"]);
	$insertnom = $bdd->prepare("UPDATE user SET last_name = ? WHERE n_secu = ?") ;
	$insertnom = execute(array($newnom, $_SESSION['n_secu'])) ;
	header('Location : profil');
}
$profil->closeCursor(); 
 ?>

<!DOCTYPE html>


<html>


<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="../CSS/style.css" />
	<link rel="stylesheet" href="../CSS/editionprofil.css"/>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'> <!--Permet de telecharger la police Source sans pro -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous"> <!-- Permet d'utiliser les émoticions de fontawesome -->
	<title>Audasanté</title>
</head>


<body>
	<header><h1>AUDASANTÉ</h1></header>

	<?php
		require('menu_lateral_admin.php');
		require('top_bar.php');
	?>

	<div id="profil">
		<form method="POST" action=""> 
			<label> Nom </label>
			<input type="text" name="newnom" placeholder="Nom" value="<?php echo $data['last_name'] ?>"> <br/>
			<label> Prénom </label>
			<input type="text" name="newprenom" placeholder="Prénom" value="<?php echo $data['first_name'] ?>"> <br/>
			<label> E-mail </label>
			<input type="text" name="newemail" placeholder="E-mail" value="<?php echo $data['e_mail'] ?>"> <br/>
			<label> Facebook </label>
			<input type="text" name="newfacebook" placeholder="Facebook" value="<?php echo $data['facebook'] ?>"> <br/>
			<label> Instragram </label>
			<input type="text" name="newinstagram" placeholder="Instagram" value="<?php echo $data['instagram'] ?>"> <br/>
			<label> Twitter </label>
			<input type="text" name="newtwitter" placeholder="Twitter" value="<?php echo $data['twitter'] ?>"> <br/>
			<label> Nouveau mot de passe </label>
			<input type="password" name="newmdp1" > <br/>
			<label> Confirmation Mot de passe </label>
			<input type="password" name="newmdp2" > <br/>
			<input type="submit" value="Modifier mon profil" >


		</form>
	</div>



	<script src="../js/script.js"></script>
</body>
</html>