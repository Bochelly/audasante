
<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 /> 
  <title>Connexion</title>
  <link rel="stylesheet" href="css/style-connect.css" media="screen"/>
  <link rel="icon" type="image/png" href="css/img/audalogo.png" />
</head>

<body>

<?php

  if(!isset($_POST['login']) || !isset($_POST['pswrd']))
  {
    $error_type = "nolog";
    header('Location: index.php');
    exit();
  }
  else
  {
    // On va vérifier les variables
    /* if()
    {
      echo 'Vous devez entrer uniquement des lettres ou des chiffres <br/>';
      echo '<a href="index.php" temp_href="index.php">Réessayer</a>';
      exit();
    }
    else
    { */
    require('config.php'); // On réclame le fichier config

      $login = $_POST['login'];
      $pswrd = $_POST['pswrd'];
      $MAX_essai = 20;
      $requete_1 = $bdd->query("SELECT * FROM user WHERE e_mail='".$login."'")->fetch();
            // On vérifie si ce login existe

  		if($requete_1==FALSE)
      {
        $error_type = "unknown";
        header('Location: index.php?error_type='.$error_type.'');
        exit();
      }

      if($requete_1['medic']==TRUE)
      {
      	$status="medic";
      }
      else
		  {
		  	$status="patient";
		  }

			if($requete_1['last_connect']==(date("Y-m-d")) && $MAX_essai==$requete_1['nb_try'])
			{
        $error_type = "spam";
        header('Location: index.php?error_type='.$error_type.'');
        exit();
			}
			else
			{
  			// On vérifie si le login et le mot de passe correspondent au compte utilisateur
  			if(password_verify($pswrd,$requete_1['password'])) {
  				$nbr_try = 0;
  				//on met a jour la date de dernère connexion et le nombre d'essais
  				$bdd->exec("UPDATE user SET nb_try='".$nbr_try."', last_connect=NOW() WHERE e_mail='".$login."'");

  			   // on démarre le système de sessions
  			   session_start();
  			   
  				$_SESSION['n_secu'] = $requete_1['n_secu'];
          $_SESSION['connected'] = true;
  				
  			   // Si la session de l'admin ou de l'user est active, on redirige vers sa page
          if($requete_1['super_admin']==TRUE) {
            header('Location: super_admin/index.php');
          }
         else if($requete_1['medic']==TRUE) {
  			   header('Location: admin/index.php');
         }
         else {
  				// On redirige vers la partie membre
  				header('Location: user/index.php');
          }

        }
        else
        {
          $nbr_try=$requete_1['nb_try']+1;
          $bdd->exec("UPDATE user SET nb_try='".$nbr_try."'WHERE e_mail='".$login."'") or die(print_r($bdd->errorInfo(), TRUE));
          
        $error_type = "falselog";
        header('Location: index.php?error_type='.$error_type.'');
        exit();
        }
      }
  }
?>
</body>
</html>