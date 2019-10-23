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
	<title>S'enregistrer</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
	<link rel="icon" type="image/png" href="css/img/audalogo.png" />
</head>

<body>

	<form method="get" action="register.php">
		<fieldset>
			<legend>N° Médecin</legend>
			<input type="text" name="nMed"/>
		</fieldset>
		<input type="submit" name="submit" value="entrer"/>
	</form>


<?php 
if(isset($_GET['nMed']))
{
	require('config.php'); // On réclame le fichier config

	if (($bdd->query("SELECT * FROM medic WHERE id='".$_GET['nMed']."'")!=null))
	{
?>
	<DIV class=p1>
		<form method="get" action="register.php">
			<fieldset>
				<legend>Nom</legend>
				<input type="text" name="nom"/>

				<legend>Prénom</legend>
				<input type="text" name="surname"/>

				<legend>N° de téléphone</legend>
				<input type="text" name="phone"/>

				<legend>N° de sécurité sociale </legend>
				<input type="text" name="secusos"/>

				<legend>e-mail </legend>
				<input type="text" name="email"/>

				<legend>Mot de passe </legend>
				<input type="password" name="pswrd_1"/>

				<legend>Confirmatoin du mot de passe </legend>
				<input type="password" name="pswrd_2"/>
			</fieldset>
			<input type="submit" name="submit" value="register"/>
		</form>
	</div>
<?php 
	}
}
?>
	
</body>
</html>
