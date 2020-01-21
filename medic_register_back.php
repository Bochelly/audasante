
<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 /> 
  <title>Connexion</title>
  <link rel="stylesheet" href="../css/style-connect.css" media="screen"/>
  <link rel="icon" type="image/png" href="../css/img/audalogo.png" />
</head>

<body>

<?php
//on vérifie qu'on ai bien toute les informatoins d'inscriptions
  if(!isset($_POST['first_name']) || !isset($_POST['last_name'])|| !isset($_POST['n_secu'])|| !isset($_POST['birth_date'])|| !isset($_POST['sex'])|| !isset($_POST['e_mail'])|| !isset($_POST['pswrd'])|| !isset($_POST['pswrd_again']) || !isset($_POST['code']))
  {
    $error_type = "nolog";
    header('Location: index.php?error_type='.$error_type.'');
    exit();
  }
  //On vérifie si les deux mot de passes sont identiques
  elseif (isset($_POST['pswrd']) != isset($_POST['pswrd_again'])) {
  	$error_type = "repeat";
    header('Location: ../index.php?error_type='.$error_type.'');
    exit();
  }

  require('config.php');
  $requete_1 = $bdd->query("SELECT code FROM code_table WHERE code='".$code."'")->fetch();
  elseif ($requete_1 == FALSE) {
  	$error_type = "no_code";
    header('Location: medic_register_front.php?error_type='.$error_type.'');
    exit();
  }
   else {
		require('config.php'); // On réclame le fichier config

		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$n_secu = $_POST['n_secu'];
		$birth_date = $_POST['birth_date'];
		$sex = $_POST['sex'];
		$e_mail = $_POST['e_mail'];
		$pswrd = $_POST['pswrd'];
		$pswrd_again = $_POST['pswrd_again'];
		$code = $_POST['code'];

		
		// On vérifie si ce numéro de sécu existe déja
		$requete_1 = $bdd->query("SELECT * FROM user WHERE n_secu='".$n_secu."'")->fetch();
		if($requete_1!=FALSE)
		{
			$error_type = "unknown";
			header('Location: index.php?error_type='.$error_type.'');
			exit();
		}
		else {

		//on hache le mot de passe
		$pswrd_hash = password_hash($pswrd,PASSWORD_BCRYPT);

		$bdd->query("INSERT INTO `user` (`n_secu`, `first_name`, `last_name`, `birth_date`, `e_mail`, `password`,`code`) VALUES ('".$n_secu."', '".$first_name."', '".$last_name."', '".$birth_date."', '".$e_mail."', '".$pswrd_hash."', '".$code."')");
			header('Location: ../index.php');
		exit();
		}
    }
?>
</body>
</html>