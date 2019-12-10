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

//on vérifie qu'on ai bien toute les informatoins d'inscriptions
  elseif(isset($_POST['n_secu']) && isset($_POST['hospital']))
   {
		require('config.php'); // On réclame le fichier config

		$n_secu = $_POST['n_secu'];
		$hospital = $_POST['hospital'];

		
		// On vérifie si ce numéro de sécu existe déja
		$requete_1 = $bdd->query("SELECT * FROM user WHERE n_secu='".$n_secu."'")->fetch();
		if($requete_1!=FALSE)
		{
			$error_type = "medic_exist";
			header('Location:add_medic.php?error_type='.$error_type.'');
			exit();
		}

		$id_hospital = $bdd->query("SELECT id_hospital FROM hospital WHERE name='".$hospital."'");

		if ($id_hospital==FALSE){
			$error_type = "hospital_not_exist";
		}
		else{
			$id_hospital=$id_hospital->fetch()['id_hospital'];
			$bdd->query("INSERT INTO `user` (`n_secu`, `id_hospital`, `medic`) VALUES ('".$n_secu."', '".$id_hospital."', 0x01)");
			$error_type = "added";
			header('Location:add_medic.php?error_type='.$error_type.'');
			exit();
		}
    }

  
  if (isset($_GET["error_type"])) {
  		if ($_GET["error_type"] == "nolog") {
			$error_msg = "Des informations sont manquantes";
		}
		elseif ($_GET["error_type"] == "meidc_exist") {
			$error_msg = "Le numéro de sécurité sociale est déjà associé a un compte";
		}
		elseif ($_GET["error_type"] == "hospital_not_exist") {
			$error_msg = "L'hopital n'est pas dans la base de donnée";
		}
		elseif ($_GET["error_type"] == "added") {
			$error_msg = "Médecin ajouté !";
		} else { $error_msg=""; }
	} else { $error_msg=""; }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 /> 
	<title>Inscrire un médecin</title>
	<link rel="stylesheet" href="css/style-connect.css" type="text/css" media="screen"/>
	<!--<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'> Permet de telecharger la police Source sans pro -->
	<link rel="icon" type="image/png" href="css/img/audalogo.png" />

	<style>
		.window form {
		  display: flex;
		  flex-wrap:wrap;
		  justify-content:space-evenly; 
		  align-items: center;
		  height:30%;
		  padding-top: 3% ;
		  padding-left: 1% ;
		  padding-right: 1% ;
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
		  top: -130%;
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

		<div class='subtitle' style="margin-bottom:3%;">Formulaire d'ajout d'un médecin</div>

		<form method="POST" action=add_medic.php>
		
			<div class="input-line">
				<input type='text' class='inputText' name='n_secu' required></input>
				<span class="floating-label">Numéro de sécurité sociale</span>
			</div>

			<div class="input-line">
				<input type='text' class='inputText' name='hospital' required></input>
				<span class="floating-label">Nom de l'hôpital</span>
			</div>

			<div class="error"><?php echo $error_msg; ?><br/></div>

			<button class="ghost-round bright"  type="submit" name="submit" value="Register" style="margin-top: 3%; margin-left:15%;">Inscrire un médecin</button><br/>
		</form>

	</div>
</body>
</html>
