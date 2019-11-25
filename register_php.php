
<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 /> 
	<title>Connexion</title>
	<link rel="stylesheet" href="css/style-connect.css" type="text/css" media="screen"/>
	<link rel="icon" type="image/png" href="css/img/audalogo.png" />
</head>

<body>

<?php
echo "<div class='welcome' style='margin-bottom:1.5%;'> Ce mail n'existe pas ! <br/></div>";
echo '<a href="index.php" temp_href="index.php">Réessayer</a>';
  if(!isset($_GET['login']) || !isset($_GET['pswrd']))
  {
            echo "<div class='welcome' style='margin-bottom:1.5%;'> Ce mail n'existe pas ! <br/></div>";
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
      $requete_1 = $bdd->query("SELECT * FROM patient WHERE e_mail='".$login."'")->fetch();
  		$requete_2 = $bdd->query("SELECT * FROM medic WHERE e_mail='".$login."'")->fetch();
            // On vérifie si ce login existe
  		
      if($requete_1!=FALSE)
      {
      	$status="patient";
      }
      else if($requete_2!=FALSE)
		  {
		  	$status="medic";
		  }
		  else
		  {
  			echo "<div class='welcome' style='margin-bottom:1.5%;'> Ce mail n'existe pas ! <br/></div>";
  			echo '<a href="index.php" temp_href="index.php">Réessayer</a>';
  			exit();
		  }
          {
  			$last_connect_arr = $bdd->query("SELECT last_connect FROM '".$status."' WHERE e_mail='".$login."'")->fetch();
  			$last_connect = strval($last_connect_arr[0]); //on récupère la date de la dernière connexion
              
            $nbr_try_arr = ($bdd->query("SELECT nb_try FROM '".$status."' WHERE e_mail='".$login."'") )->fetch();
            $nbr_try = intval($nbr_try_arr[0]); //on récupère le nombre d'essais du jour

			if($last_connect==(date("Y-m-d")) && $MAX_essai==$nbr_try)
			{

			  echo "<div class='welcome' style='margin-bottom:1.5%;'> 'Vous avez atteint le quota de tentatives, essayez demain !<br/>' </div>";
			  exit();
			}
			else
			{
			// On vérifie si le login et le mot de passe correspondent au compte utilisateur
			$password_db_arr= $bdd->query("SELECT password FROM '".$status."' WHERE e_mail='".$login."'")->fetch();
			$password_db = strval($password_db_arr[0]);
			if($password_db==$pswrd)
			{
				$nbr_try = 0;
				//on met a jour la date de dernère connexion et le nombre d'essais
				$bdd->exec("UPDATE '".$status."' SET nb_try='".$nbr_try."', last_connect=NOW() WHERE e_mail='".$login."'");
				
				// on récupère le numéro de sécurité sociale
				$n_secu_arr = $bdd->query("SELECT n_secu FROM '".$status."' WHERE e_mail='".$login."'")->fetch();
				$n_secu = intval($n_secu_arr[0]); 
			   // on démarre le système de sessions
			   session_start();
			   
				$_SESSION['n_secu_admin'] = $n_secu;
				
			   // Si la session de l'admin ou de l'user est active, on redirige vers sa page
			   header('Location: admin/index.php');

				
				// On redirige vers la partie membre
				header('Location: user/index.php');
  	            }
  	            else
  	            {
                  $nbr_try++;
                  $bdd->exec("UPDATE '".$status."' SET nb_try='".$nbr_try."'WHERE e_mail='".$login."'") or die(print_r($bdd->errorInfo(), TRUE));
                  ?>
                  <h1><span>Le mot de passe et/ou le mail sont incorrectes </span><br/></h1>
                  <a href="index.php">Réessayez</a>
                  <?php
                  exit($error_msg);
                  }
              }

          }
  }
?>
</body>
</html>