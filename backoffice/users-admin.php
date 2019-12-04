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
			require('top_bar.php');
			require('config.php');
			//$requete_1 = $bdd->prepare("SELECT first_name ,last_name ,n_secu FROM user WHERE medic=FALSE");
			//$sql->setFetchMode(PDO::FETCH_ASSOC);
		?>

		<div id="contenuAssistance">	
			<h2>Users admin</h2>
			<div id="mail"> 
							<h3>All users</h3>

							 <div class="form-popup" id="myForm">

									  <form action="user_edit_action_page.php" class="form-container">

									    <h3>Edit user</h3>
									    <h4>Antoine BORRELLY</h4>

									    <label for="email"><b>Name</b></label>
									    <input type="text" placeholder="Enter Email" name="email" required>

									    <label for="text"><b>Hospital</b></label>
									    <input type="text" placeholder="Enter Hospital" name="text" required>

									    <label for="number"><b>N° Sécu</b></label>
									    <input type="number" placeholder="0000000000" name="email" required>


									    <button type="submit" class="btn save" >Save</button>
									    <button type="submit" class="btn cancel" onclick="closeForm()">Cancel</button>
									  </form>
									</div> 

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
								    <td><span class="delete"> Delete</span> <span class="edit" onclick="openForm()">Edit</span></td>
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
								</table>
							<image id="plus-button" src = "../images/plus.png" alt="plus button"/> 
			</div>
		</div>
		<script src="../js/script.js"></script>
	</body>
</html>