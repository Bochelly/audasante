<?php

/////////////////////////
////   PAGE  ADMIN   ////
/////////////////////////

   // tous d'abord il faut démarrer le système de sessions
   session_start();

   // Si la session de l'utilisateur est active, on redirige vers sa page
	if(isset($_SESSION['id_user'])){
          header('location:user/index.php');
   } 
   // Si il n'y a pas de session utilisateur active, on redirige vers la page de connection
   else if(!isset($_SESSION['id_admin'])){
          header('location:index.php');
   }

?>

<!DOCTYPE html>

<html>

<head>
	<title>Audasanté</title>
</head>

<?php require('menu_lateral_admin.html'); ?>

<body>
	<div style="margin-top: 50vh;text-align: center;">
		<h1>Je suis un administrateur </h1>
	</div>
   
</body>

</html>
