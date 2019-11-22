
<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 /> 
	<link rel="stylesheet" href="css/style-connect.css" type="text/css" media="screen"/>
</head>

<body>

<?php
/*
if(!isset($_GET['']))
{
  header('Location: .php');
}

else
{
*/
	require('config.php'); // On réclame le fichier config

	$requete_1 = $bdd->query("SELECT first_name ,last_name ,n_secu FROM user WHERE medic=FALSE")->fetch();

	if($requete_1==FALSE)
	{
		echo "La table est vide!";
		exit();
	}
	print_r($requete_1);
	
	echo "<br>",$requete_1[0];
	echo "<br>",$requete_1[1];
	echo "<br>",$requete_1[2];
/* } */
?>
</body>
</html>