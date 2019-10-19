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
</head>

<body>
	<DIV class=p1>
		<form method="get" action="connect.php">
			<fieldset>
				<legend>Login : </legend>
				<input type="text" name="login"/>
			</fieldset>
			<fieldset>
				<legend>Mot de passe : </legend>
				<input type="password" name="pswrd"/>
			</fieldset>
			<input type="submit" name="submit" value="Se connecter"/>
		</form>
	</div>
</body>
</html>
