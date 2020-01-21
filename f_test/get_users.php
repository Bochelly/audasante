
<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 /> 
	<link rel="stylesheet" href="css/style-connect.css" type="text/css" media="screen"/>
</head>

<body>

<?php
	require('config.php'); // On réclame le fichier config

	$requete_1 = $bdd->query("SELECT * FROM user WHERE medic=FALSE")->fetch();

	if($requete_1==FALSE)
	{
		echo "La table est vide!";
		exit();
	}
	else 
	{
	print_r($requete_1);
	
	echo "<br>",$requete_1['first_name'];
	echo "<br>",$requete_1['last_name'];
	echo "<br>",$requete_1['n_secu'];
	echo "<br>",$requete_1['birth_date'];

}
?>
</body>
</html>