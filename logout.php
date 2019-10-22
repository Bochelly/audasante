<?php
	session_start();
	session_destroy();
	header('location:login.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 /> 
	<title>Acceuil</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
	<link rel="icon" type="image/png" href="css/img/audalogo.png" />
</head>

<body>
	Vous êtes déconnecté !
</body>
</html>
