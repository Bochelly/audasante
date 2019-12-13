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
	$insertnom = $bdd -> prepare("UPDATE user SET last_name = ? WHERE n_secu = ?") ;
	$insertnom -> execute(array($newnom, $_SESSION['n_secu']));
	header('Location : profil');
}

if (isset($_POST['newprenom']) and !empty($_POST['newprenom']) and $_POST['newprenom'] != $data['first_name'])
{
	$newprenom = htmlspecialchars($_POST["newprenom"]);
	$insertnom = $bdd -> prepare("UPDATE user SET first_name = ? WHERE n_secu = ?") ;
	$insertnom -> execute(array($newprenom, $_SESSION['n_secu']));
	header('Location : profil');
}

if (isset($_POST['newemail']) and !empty($_POST['newemail']) and $_POST['newemail'] != $data['e_mail'])
{
	$newemail = htmlspecialchars($_POST["newemail"]);
	$insertnom = $bdd -> prepare("UPDATE user SET e_mail = ? WHERE n_secu = ?") ;
	$insertnom -> execute(array($newemail, $_SESSION['n_secu']));
	header('Location : profil');
}

if (isset($_POST['newfacebook']) and !empty($_POST['newfacebook']) and $_POST['newfacebook'] != $data['facebook'])
{
	$newfacebook = htmlspecialchars($_POST["newfacebook"]);
	$insertnom = $bdd -> prepare("UPDATE user SET facebook = ? WHERE n_secu = ?") ;
	$insertnom -> execute(array($newfacebook, $_SESSION['n_secu']));
	header('Location : profil');
}

if (isset($_POST['newinstagram']) and !empty($_POST['newinstagram']) and $_POST['newinstagram'] != $data['instagram'])
{
	$newinstagram = htmlspecialchars($_POST["newinstagram"]);
	$insertnom = $bdd -> prepare("UPDATE user SET instagram = ? WHERE n_secu = ?") ;
	$insertnom -> execute(array($newinstagram, $_SESSION['n_secu']));
	header('Location : profil');
}

if (isset($_POST['newtwitter']) and !empty($_POST['newtwitter']) and $_POST['newtwitter'] != $data['twitter'])
{
	$newtwitter = htmlspecialchars($_POST["newtwitter"]);
	$insertnom = $bdd -> prepare("UPDATE user SET twitter = ? WHERE n_secu = ?") ;
	$insertnom -> execute(array($newtwitter, $_SESSION['n_secu']));
	header('Location : profil');
}

if (isset($_POST['newmdp1']) and !empty($_POST['newmdp1']) and isset($_POST['newmdp2']) and !empty($_POST['newmdp2']))
{	
	if($_POST['newmdp1']==$_POST['newmdp2'])
	{
		$mdp = password_hash($_POST['newmdp2'],PASSWORD_BCRYPT);
		$insertmdp = $bdd -> prepare("UPDATE user SET password = ? WHERE n_secu = ?") ;
		$insertmdp -> execute(array($mdp, $_SESSION['n_secu']));
		header('Location : profil');
	}
	else
	{
		$message_erreur="Les mots de passe ne correspondent pas";
	}
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
			<input type="submit" value="Modifier mon profil" > <br/>
			<?php if(isset($message_erreur)) {
					echo $message_erreur;
				}
				?>


		</form>
	</div>



	<script src="../js/script.js"></script>
</body>
</html>