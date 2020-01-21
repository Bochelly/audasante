
<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 /> 
	<link rel="stylesheet" href="css/style-connect.css" type="text/css" media="screen"/>
</head>

<body>

<?php 
	require('config.php'); // On réclame le fichier config
	
 		$first_name = 'Thomas';
		$last_name = 'Hercule';
		$n_secu = '1234567891';
		$birth_date = '1999-08-05';
		$e_mail = 'thomas.hercule@isep.fr';
		$pswrd = 'iseppp';

		$bdd->query("INSERT INTO `user` (`n_secu`, `first_name`, `last_name`, `birth_date`, `e_mail`, `password`) VALUES ('".$n_secu."', '".$first_name."', '".$last_name."', '".$birth_date."', '".$e_mail."', '".$pswrd."')");

		echo $n_secu;
		echo $first_name;
		echo $last_name;
		echo $birth_date ;
		echo $e_mail;
		echo $pswrd ;
?>



</body>
</html>