<?php $page_en_cours = 'assistance';
session_start(); 
if (! $_SESSION['connected'] ) { 
	header('Location: ../index.php');
	exit();
};
require('../config.php');



 ?>


<!DOCTYPE html>


<html>


<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="../CSS/style.css" />
	<link rel="stylesheet" href="../CSS/style-faq.css"/>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'> <!--Permet de telecharger la police Source sans pro -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous"> <!-- Permet d'utiliser les émoticions de fontawesome -->
	<title>Audasanté</title>
</head>


<body>
	<header><h1>AUDASANTÉ</h1></header>
	<h2> FAQ </h2>

	<?php
		require('menu_lateral_admin.php');
		require('top_bar.php')
	?>



	<div class='faq'> 
		<ul>
			<?php 
				$reponse = $bdd->query('SELECT * FROM faq');
				while ($data = $reponse->fetch()) { 
					?>
					<li class="question">
						<a href='#'><?php echo $data['subject']; ?><i class="fas fa-angle-down"></i></a>
						<ul>
							<li class="reponse"><?php echo $data['answer']; ?></li>
						</ul>
					</li>
					
					
					<?php } $reponse->closeCursor(); ?>
		</ul>
	</div>
	
	<script src="../js/script.js"></script>
</body>

</html>