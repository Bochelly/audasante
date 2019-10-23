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
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
	<link rel="icon" type="image/png" href="css/img/audalogo.png" />
	
	<style>


</style>
</head>

<body>

	<div class=back_log>
		<img src="css/img/main_mesure_x2.png" width="70%" height="auto">
	</div>


	<div class=droite_log>
		<form method="get" action="connect.php">
					<i class="" style="color:#43425D;"> </i><legend>A U D A S A N T É</legend>
					<i class="" style="color:#43425D;"> </i><legend>E-mail</legend>
					<input type="text" name="login"/>
					<legend>Mot de passe</legend>
					<input type="password" name="pswrd"/>
				</br><input type="submit" name="submit" value="Connexion"/>
				</br>Rester connecter <input type="radio" name="submit"/>
		</form>
	</div>


</body>

</html>

