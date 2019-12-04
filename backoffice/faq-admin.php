<?php $page_en_cours = 'faq-admin'; ?>

<!DOCTYPE html>


<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../CSS/style.css" />
		<link rel="stylesheet" href="../CSS/style-faq-admin.css"/>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'> <!--Permet de telecharger la police Source sans pro -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous"> <!-- Permet d'utiliser les émoticions de fontawesome -->
		<title>Audasanté</title>
	</head>
	<body>
		<header><h1>AUDASANTÉ</h1></header>

		<?php
			require('menu_lateral_backoffice.php');
			require('top_bar.php');
			require('config.php');
			//$requete_1 = $bdd->prepare("SELECT first_name ,last_name ,n_secu FROM user WHERE medic=FALSE");
			//$sql->setFetchMode(PDO::FETCH_ASSOC);
		?>

		<div id="contenuAssistance">	
			<h2>FAQ admin</h2>
			<div id="mail"> 
							<h3>All FAQ entries</h3>
					<!-- Inserer le tableau ici -->
							<table>
								  <tr>
								    <th>TITLE</th>
								    <th>TEXT</th>
								    <th></th>
								    <th>DATE</th>
								    <th>ACTIONS</th>
								  </tr>
										<?php 
										$reponse = $bdd->query('SELECT * FROM faq');
										while ($data = $reponse->fetch()) { 
											?>
											<tr>
												<td><?php echo $data['subject']; ?></td>
												<td class="answer_text"><?php echo $data['answer']; ?></td>
												<td></td>
												<td><?php echo $data['date']; ?></td>
												<td><span class="delete"> Delete</span> <span class="edit">Edit</span></td>
											</tr>								
										<?php } $reponse->closeCursor(); ?>
								</table>
							<image id="plus-button" src = "../images/plus.png" alt="plus button"/> 


			</div>
		</div>
		<script src="../js/script.js"></script>
	</body>
</html>