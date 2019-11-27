<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 /> 
	<title>Connexion</title>
	<link rel="stylesheet" href="css/style-connect.css" media="screen"/>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'> <!--Permet de telecharger la police Source sans pro -->
	<link rel="icon" type="image/png" href="css/img/audalogo.png" />
	
	<style>



</style>
</head>

<body>

<div id=log-img></div>
<div id=log-connect-container>

	<div class='window'>
		<div class='welcome' style="margin-bottom:1.5%;">AUDASANTÉ</div>

		<div class='subtitle' style="margin-bottom:3%">Entrez votre email pour recevoir un lien de réinitialisation du mot de passe</div>

		<form method="get" action="connect.php">

			<div class="input-line">
				<input type='text' class='inputText' name='login'required></input>
				<span class="floating-label">E-mail</span>
			</div>

			<button style="margin-bottom:10%;width:60%;" class="ghost-round dark"  type="submit" name="submit">Envoyer le lien</button>
		</form>

	</div>
</div>
</body> 

</html>

