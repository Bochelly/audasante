<?php
session_start(); // On démarre la session AVANT toute chose
if (! $_SESSION['connected'] ) { 
    header('Location: ../index.php');
    exit();
};
?>
<!DOCTYPE html>


<html>


<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="../CSS/style.css" />
	<link rel="stylesheet" href="../CSS/style-profil_admin.css" />
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'> <!--Permet de telecharger la police Source sans pro -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous"> <!-- Permet d'utiliser les émoticions de fontawesome -->
	<title>Audasanté</title>
</head>


<body>
	

	<header><h1>AUDASANTÉ</h1></header>

	<?php
    $page_en_cours = 'accueil';
    require('menu_lateral_admin.php');
    require('top_bar.php');
    $instance_en_cours = 'index';
	?>
		        
		        <h2> Profil Administtrateur </h2>


		        	<div id="main-section">
		        		<div class="patient">
		        			<p>Test    Patient N°</p>
		        		 </div>
		        		<div class ="menu"> 


		        			
		        			<div class="interfaces"> 

		        				<div class=" info-prog">



		        					<div class="info"> <h3> Informations</h3>
		        					</br><h4>
                       <?php 

                        require('../config.php');

                        $first_name = 'Thomas';
		                    $last_name = 'Hercule';
	                    	$n_secu = '1234567891';
	                    	$birth_date = '1999-08-05';
	                    	$e_mail = 'thomas.hercule@isep.fr';

                        $bdd->query("INSERT INTO `user` (`n_secu`, `first_name`, `last_name`, `birth_date`, `e_mail`, `n_secu_medic`) VALUES ('".$n_secu."', '".$first_name."', '".$last_name."', '".$birth_date."', '".$e_mail."')");

                        echo 'N°sécurite sociale:'. $n_secu.'</br>';
                        echo 'Nom:'. $last_name.'</br>';
                        echo 'Prénom :'.$first_name. '</br>';
		        						/*Ref HIG: SELECT * FROM user WHERE medecin=$_SESSION['medic'].'</br>';*/
		        						echo 'Date de naissance:'.$birth_date .'</br>';
                        echo 'e_mail:'.$e_mail;

                        ?>

</h4>
		        					</div>
		        					<div class="prog"><h3> Progression</h3>
		        					</div>

		        				</div>

		        				<div class=" test"> 

		        					<div class="prompteur"><h3> Prompteur patient<h3>
                      <?php
                        $moment_du_test = 'test de frequence';

                        if ($moment_du_test =='reaction auditive')
                          {
                            echo '<img src="../CSS/img/listener.png" alt="listener">';
                            
                            for ($nombre_de_lignes = 1; $nombre_de_lignes <= 15; $nombre_de_lignes++)
                              {
                               echo '' . '<br />';
                              }
                              echo 'Appuyez sur l\'interrupteur quand vous entendez un signal sonore';
                          }
                                    
                            
                                  
                        elseif ($moment_du_test=='rythme cardiaque') {
                          echo '<img src="../CSS/img/rythmecardiaque.png" alt="rythmecardiaque">';
                      
                            for ($nombre_de_lignes = 1; $nombre_de_lignes <= 15; $nombre_de_lignes++)
                              {
                               echo '' . '<br />';
                              }
                              echo 'Mesure de votre fréquence cardiaque en cours...';
                          }
                                  

                        elseif ($moment_du_test == 'temperature')
                          {
                            echo '<img src="../CSS/img/thermometer.png" alt="listener">';
                            
                            for ($nombre_de_lignes = 1; $nombre_de_lignes <= 15; $nombre_de_lignes++)
                              {
                               echo '' . '<br />';
                              }
                              echo 'Mesure de votre température corporelle en cours...';
                          }
                        elseif ($moment_du_test == 'test de frequence')
                          {
                            echo '<img src="../CSS/img/audio.png" alt="listener">';
                            
                            for ($nombre_de_lignes = 1; $nombre_de_lignes <= 15; $nombre_de_lignes++)
                              {
                               echo '' . '<br />';
                              }
                              echo 'Test de reconnaissance de note';
                          }
                          ?>
		        					</div>


		        					<div class="decompte"> <h5>


                      <?php

                      $detail_du_test = 'pendant le test';

                      if ($detail_du_test == 'avant le test')
                      {
                        echo  ' Décompte'.'</br>'.'</br>';
                        $secondes_restantes=0;
                        echo             $secondes_restantes.'</br>'.'</br>'.'<h6>SECONDES RESTANTES</h6>'.'</br>';

                         echo                '<h7> Tenez vous prêt pour </h7> '.'</br>'.'<h7> le départ du test</h7>';
                                           
                      
                      }
                      elseif ($detail_du_test=='pendant le test')
                      {
                        echo 'test en cours'.'</br>'.'veuillez patienter s\'il vous plaît';
                      }
                      ?>
		        					</div>

		        				</div>
		        				

		        				<div class="etape">
                    
                                <div id="moncercle1">
                                    <h9> 1</h9>
                                </br>
                                </br>
                                  <h8>  Rythme cardiaque<h8>
                                </div>
                                <hr>
                                <div id="moncercle2">
                                    <h9>2</h9>
                                </br>
                                </br>
                                  <h8>  Température corporelle</h8>
                                </div>
                                <hr>
                                <div id="moncercle3">
                                    <h9>3</h9>
                                </br>  
                                </br>
                                <h8>Réaction auditive</h8>
                                </div>
                                <hr>
                                <div id="moncercle4">
                                    <h9>4</h9>
                                </br>
                                </br>
                                  <h8>  Test d'audition</h8>
                                </div>

		        				</div>


		        			</div>
		        			<div class="API"> 
		        				API
		        			</div>
		        		</div>		
		        	</div>
    <script src="../js/script.js"></script>

<body>