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

  
  if (isset($_GET["error_msg"])) {
	$error_msg=$_GET["error_msg"];
    }
    else { $error_msg=""; }

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

			<div class="switch">
				<input type="checkbox" name="switch" name="submit"/><label for="switch"></label>
				<p>Se souvenir de moi</p>
			</div>

			<a href="Patients.html"><span>Mot de passe oublié</span></a>

			<span><?php echo $error_msg ?></span>

			<button class="ghost-round dark"  type="submit" name="submit" value="Connexion">Connexion</button>

			<a class="ghost-round bright"  onclick="self.location.href='register.php'">S'inscrire</a>
		</form>

	</div>
</div>
</body> 

</html>

