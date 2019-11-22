
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

  if(!isset($_GET['login']) || !isset($_GET['pswrd']))
  {
    echo "<div class='welcome' style='margin-bottom:1.5%;'> Aucun identifants recus ! <br/></div>";
    exit();
    header('Location: index.php');
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

      $login = $_GET['login'];
      $pswrd = $_GET['pswrd'];
      $MAX_essai = 20;
      $requete_1 = $bdd->query("SELECT * FROM user WHERE e_mail='".$login."'")->fetch();
            // On vérifie si ce login existe

  		if($requete_1==FALSE)
      {
        echo "<div class='welcome' style='margin-bottom:1.5%;'> Ce mail n'existe pas ! <br/></div>";
        echo '<a href="index.php" temp_href="index.php">Réessayer</a>';
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

			  echo "<div class='welcome' style='margin-bottom:1.5%;'> 'Vous avez atteint le quota de tentatives, essayez demain !<br/>' </div>";
			  exit();
			}
			else
			{
  			// On vérifie si le login et le mot de passe correspondent au compte utilisateur
  			if($requete_1['password']==$pswrd) {
  				$nbr_try = 0;
  				//on met a jour la date de dernère connexion et le nombre d'essais
  				$bdd->exec("UPDATE user SET nb_try='".$nbr_try."', last_connect=NOW() WHERE e_mail='".$login."'");

  			   // on démarre le système de sessions
  			   session_start();
  			   
  				$_SESSION['n_secu'] = $requete_1['n_secu'];
  				
  			   // Si la session de l'admin ou de l'user est active, on redirige vers sa page
         if($requete_1['medic']==TRUE) {
  			   header('Location: admin/index.php');
         }
         else {
  				// On redirige vers la partie membre
  				header('Location: user/index.php');
          }

        }
        else
        {
          $nbr_try++;
          $bdd->exec("UPDATE user SET nb_try='".$nbr_try."'WHERE e_mail='".$login."'") or die(print_r($bdd->errorInfo(), TRUE));
          ?>
          <h1><span>Le mot de passe et/ou le mail sont incorrectes </span><br/></h1>
          <a href="index.php">Réessayez</a>
          <?php
          exit($error_msg);
        }
      }
  }
?>
</body>
</html>