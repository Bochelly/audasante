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
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 /> 
	<title>Connexion</title>
	<link rel="stylesheet" href="css/style-connect.css" type="text/css" media="screen"/>
	<link rel="icon" type="image/png" href="css/img/audalogo.png" />
	
	<style>


</style>
</head>

<body>

<div id=log-img></div>
<div id=log-connect-container>

	<div class='window'>

		<div class='welcome' style="margin-bottom:1.5%;">AUDASANTÉ</div>

		<div class='subtitle' style="margin-bottom:3%;">La musique au service de la vie</div>

		<form method="get" action="connect.php">
			<input type='email' placeholder='Email' class='input-line full-width'></input>
			<input type='password' placeholder='Mot de passe' class='input-line full-width'></input>


			<div class="switch">
				<p>Se souvenir de moi</p>
				<input type="checkbox" id="switch" name="submit"/><label for="switch"></label>
			</div>

			<button class="ghost-round full-width"  type="submit" name="submit" value="Connexion">Connexion</button>
			<button class="ghost-round full-width"  type="submit" name="submit" value="Register">S'inscrire</button>
		</form>

	</div>
</div>
</body> 

</html>

