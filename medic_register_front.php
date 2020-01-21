<?php
   // tous d'abord il faut démarrer le système de sessions
   session_start();

   // Si la session de l'admin ou de l'user est active, on redirige vers sa page
	if(isset($_SESSION['id_admin'])){
          header('location:admin/index.php');
   }
   else if(isset($_SESSION['id_user'])){
          header('location:user/index.php');
   }

  
  if (isset($_GET["error_type"])) {
  		if ($_GET["error_type"] == "nolog") {
			$error_msg = "Des informations sont manquantes";
		}
		elseif ($_GET["error_type"] == "nocode") {
			$error_msg = "Code incorrect!";
		}
		elseif ($_GET["error_type"] == "repeat") {
			$error_msg = "Le mot de passe répété n'est pas le même";
		}
		elseif ($_GET["error_type"] == "exist") {
			$error_msg = "Le numéro de sécurité sociale est déjà associé a un compte";
		}
		elseif ($_GET["error_type"] == "notexist") {
			$error_msg = "Le numéro de sécurité sociale n'est pas dans la base de donnée";
		}  
		else {
			$error_msg = "Erreur inconnue";
		}
		} else { $error_msg=""; }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 /> 
	<title>S'enregistrer</title>
	<link rel="stylesheet" href="css/style-connect.css" type="text/css" media="screen"/>
	<!--<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'> Permet de telecharger la police Source sans pro -->
	<link rel="icon" type="image/png" href="css/img/audalogo.png" />

	<style>
		.window form {
		  display: flex;
		  flex-wrap:wrap;
		  justify-content:space-evenly; 
		  align-items: center;
		  padding-top: 3% ;
		  padding-left: 1% ;
		  padding-right: 1% ;
		  margin-left: 22% ;
		  margin-right: 22% ;
		  margin-bottom: 22%;
		  height: 35%;
		}
		.input-line{
			  height:18%;
			  width:100%;
			  margin-bottom: 2%;
			}

		.input-line input:focus ~ .floating-label,
		.input-line input:placeholder-shown ~ .floating-label,
		.input-line input:not(:focus):valid ~ .floating-label{
		  left: 0.1vw;
		  top: -112%;
		  font-size: 0.9vw;
		}

		div{
			font-size : 1.2vw;
		}
		a
		{
		  text-decoration : underline;
		  color: rgba(67, 66, 93, 0.7);
		  width: 100%;
		  font-size: 1.2vw;
		  font-weight: 300;
		  text-align: left;
		  transition-duration: 0.2s;
		  margin-top: 3%;
		  margin-left: 10%;
		}

	</style>

</head>













<body>


<div id=log-img></div>
<div id=log-connect-container>

	<div class='window'>
		<div class='welcome' style="margin-bottom:1.5%;">AUDASANTÉ</div>

		<div class='subtitle' style="margin-bottom:3%;">Inscrivez-vous en tant que médecin</div>

		<form method="POST" action="medic_register_back.php">

			<div class="input-line" style="width : 100%; display : inline;">
				<input type='text' class='inputText' name='code' required></input>
				<span class="floating-label">Votre code reçu par mail</span>
			</div>

			<div class="input-line" style="width : 47%; display : inline;">
				<input type='text' class='inputText' name='first_name' required></input>
				<span class="floating-label">Prénom</span>
			</div>

			<div class="input-line" style="width : 47%; display : inline;margin-left:6%;">
				<input type='text' class='inputText' name='last_name' required></input>
				<span class="floating-label">Nom</span>
			</div>
		
			<div class="input-line">
				<input type='text' class='inputText' name='n_secu' required></input>
				<span class="floating-label">Numéro de sécurité sociale</span>
			</div>

			<div class="input-line">
				Date de naissance : <input type='date' class='inputText' name='birth_date' required></input>
				
			</div>	
			<div class="input-line">
				<br/>
				Sexe : <INPUT type="radio" name="sex" value="H" name='sex' checked></INPUT> Homme <INPUT type="radio" name="sex" value="F"></INPUT> Femme<br/>
				
			</div>
		
			<div class="input-line">
				<input type='text' class='inputText' name='e_mail' required></input>
				<span class="floating-label">E-mail</span>
			</div>

			<div class="input-line">
				<input type="password" class="inputText" name='pswrd' required/></input>
				<span class="floating-label">Mot de passe</span>
			</div>

			<div class="input-line">
				<input type="password" class="inputText" name='pswrd_again' required/></input>
				<span class="floating-label">Répéter mot de passe</span>
			</div>

			<div class="error"><?php echo $error_msg ?><br/></div>

			<button class="ghost-round bright"  type="submit" name="submit" value="Register" style="margin-top: 3%; margin-left:15%;">S'inscrire</button><br/>
			<a href="index.php">Vous avez déjà un compte ? Identifiez-vous.</a>
		</form>

		
	</div>
</body>
</html>
