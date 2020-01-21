<?php $page_en_cours = 'users-admin'; 
session_start();
require('securiteBackoffice.php');
?>

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

							 <div class="form-popup" id="edit-form">

									  <form action="user_edit.php" class="form-container" method="post">
									    <h3>Edit user</h3>

									    <?php 
											$reponse = $bdd->query('SELECT * FROM user');
											?>
									    <h4 id="name-title">Name</h4>

									    <label for="first_name"><b>First name</b></label>
									    <input id="surname-input" type="text" placeholder="Enter First Name" name="first_name" value="Name" required>

									    <label for="text"><b>Last name</b></label>
									    <input id="name-input" type="text" placeholder="Enter Last Name" name="last_name" value="Name" required>



									    <label for="number"><b>N° Sécu</b></label>
									    <input id="no-input" type="number" placeholder="0000000000" name="n_secu" value=00000000 readonly="readonly" required>


									    <label for="mail"><b>Email</b></label>
									    <input id="email-input" type="text" placeholder="Enter Email" name="e_mail" value="Email" required>


									    <button type="submit" class="btn save">Save</button>
									    <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
									  </form>
									</div> 

									<div class="delete-user-form" id="delete-section">

									  <form id="delete-form" action="user_delete.php" method="post">
											 <label for="number"><b>N° Sécu</b></label>
								    	<input id="user-to-delete"name="n_secu" value="0" required>
									    <button type="submit" class="btn delete">Delete</button>
									  </form>
									</div> 



					<!-- Inserer le tableau ici -->
							<table>

								  <tr>
								    <th>NOM</th>
								    <th>N° SÉCU</th>
								    <th>EMAIL</th>
								    <th>DERNIÈRE CO.</th>
								    <th>ACTIONS</th>
								  </tr>

							  	<?php 
									$reponse = $bdd->query('SELECT * FROM user');
									while ($data = $reponse->fetch()) { 
										?>
										<tr>
											<td><?php echo $data['first_name']; echo " "; echo $data['last_name']; ?></td>
											<td><?php echo $data['n_secu']; ?></td>
											<td><?php echo $data['e_mail']; ?></td>
											<td><?php echo $data['last_connect']; ?></td>
											<td><span class="delete" onclick="confirmMessage('<?php echo $data['n_secu'] ?>')">Delete</span> <span class="edit" onclick="openForm('<?php echo $data['first_name'] ?>','<?php echo $data['last_name'] ?>','<?php echo $data['n_secu'] ?>','<?php echo $data['e_mail'] ?>')">Edit</span></td>
										</tr>								
									<?php } $reponse->closeCursor(); ?>

								</table>

			</div>
		</div>
		<script src="../js/script.js"></script>
	</body>
</html>