<?php
$DB_serveur = 'localhost'; // Nom du serveur
$DB_utilisateur = 'email'; // Nom de l'utilisateur de la base
$DB_motdepasse = 'password'; // Mot de passe pour accèder à la base
$DB_base = 'audasante'; // Nom de la base

try{$bdd = new PDO('mysql:host='.$DB_serveur.';dbname='.$DB_base.';charset=utf8', 'root', '');}
catch (Exception $e) {die('Erreur : ' . $e->getMessage());}
		
?>