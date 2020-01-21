<?php $page_en_cours = 'keys'; ?>

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
            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

            function generate_string($input, $strength = 16) {
                $input_length = strlen($input);
                $random_string = '';
                for($i = 0; $i < $strength; $i++) {
                    $random_character = $input[mt_rand(0, $input_length - 1)];
                    $random_string .= $random_character;
                }
                $random_string = strtoupper($random_string);
                $random_string = wordwrap($random_string , 4 , '-' , true );
                return $random_string;
            }
		?>

		<div id="contenuAssistance">	
			<h2>Clé d'inscription</h2>
			<div id="mail">
                <h3 id="subtitle">Utilisez cette clé à usage unique pour ajouter un utilisateur.</h3>
                <?php
                $reponse = $bdd->query('SELECT * FROM keys');?>
                <h3 id="key"> <?php echo(generate_string($permitted_chars,20)); ?></h3>



			</div>
		</div>
		<script src="../js/script.js"></script>
	</body>
</html>