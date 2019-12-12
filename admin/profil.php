<?php $page_en_cours = 'parametre';
session_start(); // On démarre la session AVANT toute chose
require('../config.php');

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
	<link rel="stylesheet" href="../CSS/profil.css"/>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'> <!--Permet de telecharger la police Source sans pro -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous"> <!-- Permet d'utiliser les émoticions de fontawesome -->
	<title>Audasanté</title>
</head>


<body>
	<header><h1>AUDASANTÉ</h1></header>

	<?php
		require('menu_lateral_admin.php');
		require('top_bar.php');
		$profil = $bdd->query('SELECT * FROM user WHERE n_secu='.$_SESSION["n_secu"].'');
		$data = $profil->fetch();
	?>

	<div id="profil">
		<h2> Profil </h2><br>
		<ul>
			<li><h3>Nom :</h3> <?php echo $data['first_name']?> </li>
			<li><h3>Prénom :</h3>  <?php echo $data['last_name']?></li>

			<li><h3>Date de naissance :</h3>  <?php $date = date_parse($data['birth_date']);
									  $jour = $date['day'];
									  $mois = $date['month'];
									  $annee = $date['year'];
									  echo $jour."/".$mois."/".$annee ?>	</li>

			<li><h3>N° de sécurité sociale :</h3>  <?php echo $data['n_secu']?></li>
			<li><h3>E-mail :</h3>  <?php echo $data['e_mail'] ?></li>

			<?php
				$profil->closeCursor(); 
			?>

			<li><h3>Nom médecin :</h3>  <?php   
												$medecin = $bdd->query('SELECT first_name, last_name FROM user WHERE n_secu='.$data["n_secu_medic"].'');
												
												if($medecin == false){
													echo "";
												}
												else{
													$datamedic = $medecin->fetch();
													echo $datamedic['first_name'].' '.$datamedic['last_name'];
												}
			   							?>
			</li>


			<li><h3>Hôpital :</h3>  <?php echo $data['id_hospital']?></li>
			<li><h3>Facebook :</h3>  <?php echo $data['facebook']?></li>
			<li><h3>Instagram :</h3>  <?php echo $data['instagram']?></li>
			<li><h3>Twitter :</h3>  <?php echo $data['twitter']?></li>


			<?php
				$profil->closeCursor(); 
			?>
		</ul>
		<div class="boutonedition"><a href="editionprofil"> Editer votre profil </a></div>
	</div>



	<script src="../js/script.js"></script>
</body>
</html>