
<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 /> 
	<title>Connexion</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
	<link rel="icon" type="image/png" href="css/img/audalogo.png" />
</head>

<body>

<?php

  if(!isset($_GET['login']) && !isset($_GET['pswrd']))
  {
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
  		$requete_1 = $bdd->query("SELECT * FROM connect WHERE email='".$login."'");
          // On vérifie si ce login existe
  		
          if($requete_1==FALSE)
          {
              echo "Ce mail n'existe pas ! <br/>";
              echo '<a href="index.php" temp_href="index.php">Réessayer</a>';
              exit();
          }
          else
          {
  			$lastconnect_arr = $bdd->query("SELECT lastconnect FROM connect WHERE email='".$login."'")->fetch();
  			$lastconnect = strval($lastconnect_arr[0]); //on récupère la date de la dernière connexion
              
            $nbr_try_arr = ($bdd->query("SELECT nb_try FROM connect WHERE email='".$login."'") )->fetch();
            $nbr_try = intval($nbr_try_arr[0]); //on récupère le nombre d'essais du jour

			$hier = 
			if($lastconnect== (date("Y-m-d"),date("Y-m-d"),date("Y-m-d")) && $MAX_essai==$nbr_try)
			{
			  echo 'Vous avez atteint le quota de tentative, essayez demain !<br/>';
			  exit();
			}
			else
			{
			// On vérifie si le login et le mot de passe correspondent au compte utilisateur
			$password_db_arr= $bdd->query("SELECT password FROM connect WHERE email='".$login."'")->fetch();
			$password_db = strval($password_db_arr[0]);
			if($password_db==$pswrd)
			{
								


				$nbr_try = 0;
				//on met a jour la date de dernère connexion et le nombre d'essais
				$bdd->exec("UPDATE connect SET nb_try='".$nbr_try."', lastconnect=NOW() WHERE email='".$login."'");
				
				// on récupère l'id
				$id_arr = $bdd->query("SELECT id FROM connect WHERE email='".$login."'")->fetch();
				$id = intval($id_arr[0]); 
			   // on démarre le système de sessions
			   session_start();
			   
				$_SESSION['id_admin'] = $id;
				
			   // Si la session de l'admin ou de l'user est active, on redirige vers sa page
			   header('Location: admin/index.php');

				
				// On redirige vers la partie membre
				header('Location: user/index.php');
  	            }
  	            else
  	            {
                  $nbr_try++;
                  $bdd->exec("UPDATE connect SET nb_try='".$nbr_try."'WHERE email='".$login."'") or die(print_r($bdd->errorInfo(), TRUE));

                  echo 'Le mot de passe et/ou le mail sont incorrectes <br/>';
                  echo '<a href="index.php" href="index.php">Réessayez</a>';
                  exit();
                  }
              }

          }
  }
?>
</body>
</html>