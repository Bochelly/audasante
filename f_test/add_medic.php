
<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 /> 
	<link rel="stylesheet" href="css/style-connect.css" type="text/css" media="screen"/>
</head>

<body>

<?php
	require('..\config.php'); // On réclame le fichier config

	$pswrd_hash = password_hash('isep',PASSWORD_BCRYPT);

	$bdd->query("UPDATE `user` SET (`first_name`='thomas', `last_name`='thomas', `birth_date`='thomas', `e_mail`='thomas', `password`='".$pswrd_hash."') WHERE `user`.`n_secu` = '123'");
?>
</body>
</html>