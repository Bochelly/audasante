<?php $page_en_cours = 'users-admin'; ?>

<!DOCTYPE html>


<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../CSS/style.css" />
		<link rel="stylesheet" href="../CSS/style-users-admin.css"/>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'> <!--Permet de telecharger la police Source sans pro -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous"> <!-- Permet d'utiliser les émoticions de fontawesome -->
		<title>Audasanté</title>
	</head>
	<body>
		<header><h1>AUDASANTÉ</h1></header>

		<?php
			require('menu_lateral_backoffice.php');
			require('top_bar.php')
		?>
		<div id="contenuAssistance">	
			<h2>Users admin</h2>
			<div id="mail"> 
							<h3>All users</h3>
					<!-- Inserer le tableau ici -->
							<table>
								  <tr>
								    <th>NOM</th>
								    <th>HÔPITAL</th>
								    <th>STATUS</th>
								    <th>N° SÉCU</th>
								    <th>ACTIONS</th>
								  </tr>
								  <tr>
								    <td>Antoine BORRELLY</td>
								    <td>Dupont</td>
								    <td>Admin</td>
								    <td>1022302040</td>
								    <td><span class="delete"> Delete</span> <span class="edit">Edit</span></td>
								  </tr>
								  <tr>
								    <td>Antoine BORRELLY</td>
								    <td>Dupont</td>
								    <td>Admin</td>
								    <td>1022302040</td>
								    <td><span class="delete"> Delete</span> <span class="edit">Edit</span></td>
								  </tr>
								  <tr>
								    <td>Antoine BORRELLY</td>
								    <td>Dupont</td>
								    <td>Admin</td>
								    <td>1022302040</td>
								    <td><span class="delete"> Delete</span> <span class="edit">Edit</span></td>
								  </tr>
								  <tr>
								    <td>Antoine BORRELLY</td>
								    <td>Dupont</td>
								    <td>Admin</td>
								    <td>1022302040</td>
								    <td><span class="delete"> Delete</span> <span class="edit">Edit</span></td>
								  </tr>
								  <tr>
								    <td>Antoine BORRELLY</td>
								    <td>Dupont</td>
								    <td>Admin</td>
								    <td>1022302040</td>
								    <td><span class="delete"> Delete</span> <span class="edit">Edit</span></td>
								  </tr>
								  <tr>
								    <td>Antoine BORRELLY</td>
								    <td>Dupont</td>
								    <td>Admin</td>
								    <td>1022302040</td>
								    <td><span class="delete"> Delete</span> <span class="edit">Edit</span></td>
								  </tr>
								  <tr>
								    <td>Antoine BORRELLY</td>
								    <td>Dupont</td>
								    <td>Admin</td>
								    <td>1022302040</td>
								    <td><span class="delete"> Delete</span> <span class="edit">Edit</span></td>
								  </tr>
								  <tr>
								    <td>Antoine BORRELLY</td>
								    <td>Dupont</td>
								    <td>Admin</td>
								    <td>1022302040</td>
								    <td><span class="delete"> Delete</span> <span class="edit">Edit</span></td>
								  </tr>
								  <tr>
								    <td>Antoine BORRELLY</td>
								    <td>Dupont</td>
								    <td>Admin</td>
								    <td>1022302040</td>
								    <td><span class="delete"> Delete</span> <span class="edit">Edit</span></td>
								  </tr>
								  <tr>
								    <td>Antoine BORRELLY</td>
								    <td>Dupont</td>
								    <td>Admin</td>
								    <td>1022302040</td>
								    <td><span class="delete"> Delete</span> <span class="edit">Edit</span></td>
								  </tr>
								  <tr>
								    <td>Antoine BORRELLY</td>
								    <td>Dupont</td>
								    <td>Admin</td>
								    <td>1022302040</td>
								    <td><span class="delete"> Delete</span> <span class="edit">Edit</span></td>
								  </tr>
								  <tr>
								    <td>Antoine BORRELLY</td>
								    <td>Dupont</td>
								    <td>Admin</td>
								    <td>1022302040</td>
								    <td><span class="delete"> Delete</span> <span class="edit">Edit</span></td>
								  </tr>
								  <tr>
								    <td>Antoine BORRELLY</td>
								    <td>Dupont</td>
								    <td>Admin</td>
								    <td>1022302040</td>
								    <td><span class="delete"> Delete</span> <span class="edit">Edit</span></td>
								  </tr>
								  <tr>
								    <td>Antoine BORRELLY</td>
								    <td>Dupont</td>
								    <td>Admin</td>
								    <td>1022302040</td>
								    <td><span class="delete"> Delete</span> <span class="edit">Edit</span></td>
								  </tr>
								  <tr>
								    <td>Antoine BORRELLY</td>
								    <td>Dupont</td>
								    <td>Admin</td>
								    <td>1022302040</td>
								    <td><span class="delete"> Delete</span> <span class="edit">Edit</span></td>
								  </tr>
								  <tr>
								    <td>Poudlard</td>
								    <td>Duval</td>
								  </tr>
								   <tr>
								    <td>Admin</td>
								    <td>Duval</td>
								  </tr>
								   <tr>
								    <td>1022302040</td>
								    <td>Duval</td>
								  </tr>
								   <tr>
								    <td><span class="delete"> Delete</span> <span class="edit">Edit</span></td>
								    <td>Duval</td>
								  </tr>
								</table>

							>
			</div>
		</div>
		<script src="../js/script.js"></script>
	</body>
</html>