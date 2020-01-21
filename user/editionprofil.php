<?php $page_en_cours = 'parametre';
session_start(); // On démarre la session AVANT toute chose
require('../config.php');

require('securite_user.php');

$profil = $bdd->query('SELECT * FROM user WHERE n_secu='.$_SESSION["n_secu"].'');
		$data = $profil->fetch();



if (isset($_POST['newnom']) AND !empty($_POST['newnom']) AND $_POST['newnom'] != $data['last_name'])
{
	$newnom = htmlspecialchars($_POST["newnom"]);
	$insertnom = $bdd -> prepare("UPDATE user SET last_name = ? WHERE n_secu = ?") ;
	$insertnom -> execute(array($newnom, $_SESSION['n_secu']));
	header('Location : profil');
}

if (isset($_POST['newprenom']) AND !empty($_POST['newprenom']) AND $_POST['newprenom'] != $data['first_name'])
{
	$newprenom = htmlspecialchars($_POST["newprenom"]);
	$insertnom = $bdd -> prepare("UPDATE user SET first_name = ? WHERE n_secu = ?") ;
	$insertnom -> execute(array($newprenom, $_SESSION['n_secu']));
	header('Location : profil');
}

if (isset($_POST['newemail']) AND !empty($_POST['newemail']) AND $_POST['newemail'] != $data['e_mail'])
{
	$newemail = htmlspecialchars($_POST["newemail"]);
	$insertnom = $bdd -> prepare("UPDATE user SET e_mail = ? WHERE n_secu = ?") ;
	$insertnom -> execute(array($newemail, $_SESSION['n_secu']));
	header('Location : profil');
}

if (isset($_POST['newfacebook']) AND !empty($_POST['newfacebook']) AND $_POST['newfacebook'] != $data['facebook'])
{
	$newfacebook = htmlspecialchars($_POST["newfacebook"]);
	$insertnom = $bdd -> prepare("UPDATE user SET facebook = ? WHERE n_secu = ?") ;
	$insertnom -> execute(array($newfacebook, $_SESSION['n_secu']));
	header('Location : profil');
}

if (isset($_POST['newinstagram']) AND !empty($_POST['newinstagram']) AND $_POST['newinstagram'] != $data['instagram'])
{
	$newinstagram = htmlspecialchars($_POST["newinstagram"]);
	$insertnom = $bdd -> prepare("UPDATE user SET instagram = ? WHERE n_secu = ?") ;
	$insertnom -> execute(array($newinstagram, $_SESSION['n_secu']));
	header('Location : profil');
}

if (isset($_POST['newtwitter']) AND !empty($_POST['newtwitter']) AND $_POST['newtwitter'] != $data['twitter'])
{
	$newtwitter = htmlspecialchars($_POST["newtwitter"]);
	$insertnom = $bdd -> prepare("UPDATE user SET twitter = ? WHERE n_secu = ?") ;
	$insertnom -> execute(array($newtwitter, $_SESSION['n_secu']));
	header('Location : profil');
}

if (isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2']))
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

if(isset($_FILES['photo']) AND !empty($_FILES['photo']['name']))
{
		$tailleMax = 2097152;
		$extensionsValides = array('jpg', 'jpeg', 'png');
		if($_FILES['photo']['size'] <= $tailleMax)
		{
			$extensionUpload = strtolower(substr(strrchr($_FILES['photo']['name'], '.'), 1));
			if(in_array($extensionUpload,$extensionsValides))
			{
				$chemin = "../images/images_profil/".$_SESSION['n_secu'].'.'.$extensionUpload;
				$resultat = move_uploaded_file($_FILES['photo']['tmp_name'], $chemin);
				if($resultat)
				{
					$updatephoto = $bdd -> prepare('UPDATE user SET photo = :photo WHERE n_secu = :n_secu');
					$updatephoto -> execute(array(
						'photo' => $_SESSION['n_secu'].".".$extensionUpload,
						'n_secu' => $_SESSION['n_secu']
						));

				}
				else
				{
					$message_erreur="erreur lors de l'importation de l'image";
				}
			}
			else
			{
				$message_erreur="formats d'image acceptés : jpeg, jpg, png.";
			}
		}
		else
		{
			$message_erreur="La photo de profil ne doit pas dépasser 2Mo";
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
		require('menu_lateral_user.php');
		require('top_bar.php');
	?>

	<div id="profil">
		<form method="POST" action=""  enctype="multipart/form-data"> 
			<label class="floating-label">Photo</label>
			<input type='file' name="photo"> </input> 
			<br/>


			<div class="input-line">
				<br/>
			<label class="floating-label">Nom</label>
			<br/>
			<input type="text" name="newnom" placeholder="Nom" value="<?php echo $data['last_name'] ?>">
			
			<br/>
			</div>

			<div class="input-line">
				<br/>
			<label class="floating-label">prenom</label>
			<br/>
			<input type="text" name="newprenom" placeholder="Prénom" value="<?php echo $data['first_name'] ?>">
			
			 <br/>
			 </div>

			<div class="input-line">
				<br/>
			<label class="floating-label">E-mail</label>
			<br/>
			<input type="text" name="newemail" placeholder="E-mail" value="<?php echo $data['e_mail'] ?>">
			
			<br/>
			</div>

			<div class="input-line">
				<br/>
			<label class="floating-label">Facebook</label>
			<br/>

			<input type="text" name="newfacebook" placeholder="Facebook" value="<?php echo $data['facebook'] ?>"> 
			
			<br/>
			</div>

			<div class="input-line">
				<br/>
			<label class="floating-label">Instagram</label>
			<br/> 
			<input type="text" name="newinstagram" placeholder="Instagram" value="<?php echo $data['instagram'] ?>">

			<br/>
			</div>

			<div class="input-line">
				<br/>
			<label class="floating-label">Twitter</label>
			<br/>				
			<input type="text" name="newtwitter" placeholder="Twitter" value="<?php echo $data['twitter'] ?>"> 
			<br/>
			</div>
			<button class="ghost-round dark"  type="submit" name="submit" value="Connexion">Modifier mon Profil</button>
				


		</form>
	</div>



	<script src="../js/script.js"></script>
</body>
</html>