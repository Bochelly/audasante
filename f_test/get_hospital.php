
<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 /> 
	<link rel="stylesheet" href="css/style-connect.css" type="text/css" media="screen"/>
</head>

<body>

<?php
	require('config.php'); // On réclame le fichier config

	$id_hospital = $bdd->query("SELECT id_hospital FROM hospital WHERE name='HG'");

	$id_hospital=$id_hospital->fetch();
	$id_hospital=$id_hospital['id_hospital'];
	$bdd->query("INSERT INTO `user` (`n_secu`, `id_hospital`, `medic`) VALUES ('666666', '".$id_hospital."', 0x01)");

	if($id_hospital==FALSE)
	{
		echo "La table est vide!";
		exit();
	}
	else 
	{
	
	echo "<br>",$id_hospital;

}
?>
</body>
</html>