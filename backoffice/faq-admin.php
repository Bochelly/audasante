<?php $page_en_cours = 'faq-admin'; 

session_start();
require('securiteBackoffice.php');
?>

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

							<div class="form-popup" id="edit-form">

									  <form action="faq_edit.php" class="form-container" method="post">
									    <h3>Modifier l'entrée FAQ</h3>

									    <?php 
											$reponse = $bdd->query('SELECT * FROM faq');
											?>
									    <h4 id="subject">subject</h4>

									    <label for="first_name"><b>Sujet</b></label>
									    <input id="subject-input" type="text" placeholder="Enter sj" name="subject" value="Name" required>

									    <label for="text"><b>Question</b></label>
									    <input id="answer-input" type="textarea" placeholder="Enter qs" name="answer" value="Name" required>


									    <label for="number"><b>ID</b></label>
									    <input id="id" type="number" placeholder="0000000000" name="id" value=00000000 readonly="readonly" required>


									    <button type="submit" class="btn save">Save</button>
									    <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
									  </form>
									</div> 

									<div class="form-popup" id="add-form">

									  <form action="faq_add.php" class="form-container" method="post">
									    <h3>Ajouter une entrée FAQ</h3>

									    <?php 
											$reponse = $bdd->query('SELECT * FROM faq');
											?>
									    <h4 id="subject">Entrez un sujet et une réponse.</h4>

									    <label for="first_name"><b>Sujet</b></label>
									    <input id="subject-input" type="text" placeholder="Enter une question ou un sujet" name="subject" required>

									    <label for="text"><b>Réponse</b></label>
									    <input id="answer-input" type="textarea" placeholder="Enter la réponse" name="answer" required>


									    <label for="number"><b>ID</b></label>
									    <input id="id" type="number" placeholder="0000000000" name="id" value=00000000 readonly="readonly" required>


									    <button type="submit" class="btn save">Save</button>
									    <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
									  </form>
									</div> 

									<div class="delete-user-form" id="delete-section">

									  <form id="delete-form" action="faq_delete.php" method="post">
											 <label for="number"><b>N° Sécu</b></label>
								    	<input id="user-to-delete"name="id" value="0" required>
									    <button type="submit" class="btn delete">Delete</button>
									  </form>
									</div> 
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
												<td><span class="delete" onclick="confirmMessage('<?php echo $data['id'] ?>')">Delete</span> <span class="edit" onclick="openFormFAQ('<?php echo $data['id'] ?>','<?php echo $data['subject'] ?>','<?php echo $data['answer']?>')">Edit</span></td>
											</tr>								
										<?php } $reponse->closeCursor(); ?>
								</table>
							<image id="plus-button" src = "../images/plus.png" alt="plus button" onclick="openFormAddFAQ()"/> 


			</div>
		</div>
		<script src="../js/script.js"></script>
	</body>
</html>