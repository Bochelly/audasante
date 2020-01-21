<?php $page_en_cours = 'add_patient'; 
session_start(); // On démarre la session AVANT toute chose
if (! $_SESSION['connected'] ) { 
	header('Location: ../index.php');
	exit();
}
  
  if (isset($_GET["error_type"])) {
  		if ($_GET["error_type"] == "nolog") {
			$error_msg = "Des informations sont manquantes";
		}
		else {
			$error_msg = "Errreur inconnue";
		}
		} else { $error_msg=""; }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 /> 
	<title>S'enregistrer</title>
	<link rel="stylesheet" href="../css/style-connect.css" type="text/css" media="screen"/>
	<!--<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'> Permet de telecharger la police Source sans pro -->
	<link rel="icon" type="image/png" href="../css/img/audalogo.png" />

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
	</style>

</head>













<body>


<div id=log-img></div>
<div id=log-connect-container>

	<div class='window'>
		<div class='welcome' style="margin-bottom:1.5%;">AUDASANTÉ</div>

		<div class='subtitle' style="margin-bottom:3%;">Formulaire d'inscription de votre patient</div>

		<form method="POST" action="patient_register_back.php">

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
		</form>

		
	</div>
</body>
</html>
