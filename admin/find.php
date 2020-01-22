<?php $page_en_cours = 'none';
session_start();
require('sécurité_médecin.php');
require('../config.php');
?>

<!DOCTYPE html>


<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../CSS/style.css" />
		<link rel="stylesheet" href="../CSS/style-users-admin.css"/>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'> <!--Permet de telecharger la police Source sans pro -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous"> <!-- Permet d'utiliser les émoticions de fontawesome -->
		<title>Audasanté - Résultats de la recherche</title>
	</head>
	<body>
		<header><h1>AUDASANTÉ</h1></header>

		<?php

            $search_text = "";
            $full_name = array();
			require('menu_lateral_admin.php');
			require('top_bar.php');
			//$requete_1 = $bdd->prepare("SELECT first_name ,last_name ,n_secu FROM user WHERE medic=FALSE");
			//$sql->setFetchMode(PDO::FETCH_ASSOC);
		?>

        <?php

        //on vérifie qu'on ai bien toute les informatoins d'inscriptions
        if(empty($_POST['search-text']) || $_POST['search-text']=="")
        {
            echo("<div id=\"contenuAssistance\"><h2>La recherche n'a renvoyé aucun résultat ! Vérifiez votre saisie ou inscrivez l'utilisateur.</h2></div>");
            //$error_type = "nolog";
            //header('Location: index.php?error_type='.$error_type.'');
            //exit();
        }
        else
        {
            $search_text = $_POST['search-text'];
            $full_name = explode(" ", $search_text); //ainsi full_name[1] prénom et l'autre nom
            echo ($full_name[0]);
            ?>
            <div id="contenuAssistance">
                <h2>Résultats de la recherche</h2>
                <div id="mail">
                    <h3>Utilisateurs trouvé(s) pour : "<?php echo ($full_name[0].' '.$full_name[1])?>"</h3>

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
                        //echo ($full_name[0] . $full_name[1]);
                        $pquery = "SELECT * FROM user WHERE first_name ='".$full_name[0]."' AND last_name ='".$full_name[1]."'";
                        $reponse = $bdd->query($pquery);
                        while ($data = $reponse->fetch()) {
                            ?>
                            <tr>
                                <td><?php echo $data['first_name']; echo " "; echo $data['last_name']; ?></td>
                                <td><?php echo $data['n_secu']; ?></td>
                                <td><?php echo $data['e_mail']; ?></td>
                                <td><?php echo $data['last_connect']; ?></td>
                                <td>Indisponible</td>
                            </tr>
                        <?php } $reponse->closeCursor(); ?>
                        <?php
                        //POUR L'INVERSE NOM - PRENOM
                        $pquery = "SELECT * FROM user WHERE n_secu ='".$full_name[0]."'";
                        $reponse = $bdd->query($pquery);
                        while ($data = $reponse->fetch()) {
                            ?>
                            <tr>
                                <td><?php echo $data['first_name']; echo " "; echo $data['last_name']; ?></td>
                                <td><?php echo $data['n_secu']; ?></td>
                                <td><?php echo $data['e_mail']; ?></td>
                                <td><?php echo $data['last_connect']; ?></td>
                                <td>Indisponible</td>
                            </tr>
                        <?php } $reponse->closeCursor(); ?>
                        <?php
                        $pquery = "SELECT * FROM user WHERE first_name ='".$full_name[1]."' AND last_name ='".$full_name[0]."'";
                        $reponse = $bdd->query($pquery);
                        while ($data = $reponse->fetch()) {
                        ?>
                        <tr>
                            <td><?php echo $data['first_name']; echo " "; echo $data['last_name']; ?></td>
                            <td><?php echo $data['n_secu']; ?></td>
                            <td><?php echo $data['e_mail']; ?></td>
                            <td><?php echo $data['last_connect']; ?></td>
                            <td>Indisponible</td>
                        </tr>
                        <?php } $reponse->closeCursor(); ?>

                    </table>

                </div>
            </div>
            <?php
        }
        ?>


        <?php //echo("<div id=\"contenuAssistance\"><h2>La recherche n'a renvoyé aucun résultat ! Vérifiez votre saisie ou inscrivez l'utilisateur.</h2></div>");
        //$error_type = "nolog";
        //header('Location: index.php?error_type='.$error_type.'');
        //exit();?>



		<script src="../js/script.js"></script>
	</body>
</html>