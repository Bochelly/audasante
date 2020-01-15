<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 /> 
	<title>Modifier mot de passe</title>
	<link rel="stylesheet" href="css/style-connect.css" type="text/css" media="screen"/>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<link rel="icon" type="image/png" href="css/img/audalogo.png" />

	<style>
		.retour 
		{
			position: absolute;
			bottom: 20%;
		}


	</style>

</head>









<body>


<div id=log-img></div>
<div id=log-connect-container>

	<div class='window'>
		<div class='welcome' style="margin-bottom:1.5%;">AUDASANTÉ</div>

		<div class='subtitle' style="margin-bottom:3%;"> Modifier votre mot de passe grâce à votre code reçu par mail </div>

		<form method="POST" action="register_php.php">

		
			<div class="input-line">
				<input type='text' class='inputText' name='e_mail' required></input>
				<span class="floating-label">E-mail</span>
			</div>

			<div class="input-line">
				<input type='text' class='inputText' name='code' required></input>
				<span class="floating-label">Code de sécurité</span>
			</div>

			<div class="input-line">
				<input type="password" class="inputText" name='pswrd' required/></input>
				<span class="floating-label">Mot de passe</span>
			</div>

			<div class="input-line">
				<input type="password" class="inputText" name='pswrd_again' required/></input>
				<span class="floating-label">Répéter mot de passe</span>
			</div>


			<button class="ghost-round bright"  type="submit" name="submit" value="Valider" style="margin-top: 3%; margin-left:15%;">Modifier mon mot de passe</button><br/>
			<a class='retour' href="index">Identifiez-vous.</a>
		</form>

		
	</div>
</body>
</html>