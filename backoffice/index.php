<?php $page_en_cours = 'accueil'; ?>

<!DOCTYPE html>


<html>


<head>
	<meta charset="utf-8" />
    <!-- Latest compiled and minified plotly.js JavaScript -->
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

    <!-- OR use a specific plotly.js release (e.g. version 1.5.0) -->
    <script src="https://cdn.plot.ly/plotly-1.5.0.min.js"></script>

    <!-- OR an un-minified version is also available -->
    <script src="https://cdn.plot.ly/plotly-latest.js" charset="utf-8"></script>

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
        <h2>Clé d'inscription</h2>
        <div id="mail">
            <p onclick="plot()">Hello</p>

        </div>


    </div>
    <div id="plot">
        <h3>Graph</h3>
    </div>
	<script src="../js/script.js"></script>
    <script src="plot.js"></script>
</body>
</html>

