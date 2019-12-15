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

			<?php 
				if(!empty($data['photo']))
				{
			?>
				<img class='photoProfil'src="../images/images_profil/<?php echo $data['photo']; ?>">
			<?php		
				}
			?>

		<br/>
		<ul>
			<li>Nom : <?php echo $data['first_name']?> </li>
			<li>Prénom : <?php echo $data['last_name']?></li>

			<li>Date de naissance : <?php $date = date_parse($data['birth_date']);
									  $jour = $date['day'];
									  $mois = $date['month'];
									  $annee = $date['year'];
									  echo $jour."/".$mois."/".$annee ?>	</li>

			<li>N° de sécurité sociale : <?php echo $data['n_secu']?></li>
			<li>E-mail : <?php echo $data['e_mail'] ?></li>

			<?php
				$profil->closeCursor(); 
			?>

			<li>Nom médecin : <?php   
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


			<li>Hôpital : <?php echo $data['id_hospital']?></li>
			<li>Facebook : <?php echo $data['facebook']?></li>
			<li>Instagram : <?php echo $data['instagram']?></li>
			<li>Twitter : <?php echo $data['twitter']?></li>


			<?php
				$profil->closeCursor(); 
			?>
		</ul>
		<a class="boutonedition" href="editionprofil"><p> Editer votre profil </p></a>
	</div>



	<script src="../js/script.js"></script>
</body>
</html>