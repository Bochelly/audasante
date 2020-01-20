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
  		if ($_GET["error_type"] == "falselog") {
			$error_msg = "Mot de passe incorrect";
		}
		elseif ($_GET["error_type"] == "unknown") {
			$error_msg = "Cet e-mail n'existe pas !";
		}
		elseif ($_GET["error_type"] == "nolog") {
			$error_msg = "Aucun identifants recus !";
		}
		elseif ($_GET["error_type"] == "spam") {
			$error_msg = "Vous avez atteint le quota de tentatives, essayez demain !";
		}
	} else { $error_msg=""; }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 /> 
	<title>Connexion</title>
	<link rel="stylesheet" href="css/style-connect.css" media="screen"/>
	<link rel="icon" type="image/png" href="css/img/audalogo.png" />
	
</head>

<body>

<div id=log-img></div>
<div id=log-connect-container>

	<div class='window'>
		<div class='welcome' style="margin-bottom:1.5%;">AUDASANTÉ</div>

		<div class='subtitle' style="margin-bottom:3%;">La musique au service de la vie</div>

		<form method="POST" action="connect.php">

			<div class="input-line">
				<input type='text' class='inputText' name='login'required></input>
				<span class="floating-label">E-mail</span>
			</div>

			<div class="input-line">
				<input type="password" class="inputText" name='pswrd'required/></input>
				<span class="floating-label">Mot de passe</span>
			</div>

			<div class="error"><?php echo $error_msg ?><br/></div>

			<div class="switch">
				<input type="checkbox" id="switch" name="switch"/><label for="switch"></label>
				<p>Se souvenir de moi</p>
			</div>

			<a href="mdp_oublié.php"><span>Mot de passe oublié</span></a>

			<button class="ghost-round dark"  type="submit" name="submit" value="Connexion">Connexion</button>

			<a class="ghost-round bright"  onclick="self.location.href='register.php'">S'inscrire</a>
		</form>

	</div>
</div>
</body> 

</html>

