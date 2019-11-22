<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 /> 
	<title>S'enregistrer</title>
	<link rel="stylesheet" href="css/style-connect.css" type="text/css" media="screen"/>
	<link rel="icon" type="image/png" href="css/img/audalogo.png" />

	<style>

				.window form {
		  display: flex;
		  flex-wrap:wrap;
		  justify-content:space-evenly; 
		  align-items: center;
		  padding-top: 3% ;
		  padding-left: 1% ;
		  padding-right: 1% ;
		  margin-left: 30% ;
		  margin-right: 30% ;
		  margin-bottom: 15% ; 
		  height: 35%;
		}

		.input-line input:focus ~ .floating-label,
		.input-line input:placeholder-shown ~ .floating-label,
		.input-line input:not(:focus):valid ~ .floating-label{
		  left: 0.1vw;
		  top: -90%;
		  font-size: 0.9vw;
		}

		h1
		{
			text-align: center;
		}

	</style>

</head>



<body>

	<div class='window'>
		<h1>Formulaire d'inscription</h1>
		<form method="get" action="#">

			<div class="input-line">
				<input type='text' class='inputText' required></input>
				<span class="floating-label">Nom</span>
			</div>

			<div class="input-line">
				<input type='text' class='inputText' required></input>
				<span class="floating-label">Prénom</span>
			</div>

			<div class="input-line">
				<input type='text' class='inputText' required></input>
				<span class="floating-label">Date de naissance</span>
			</div>

			<div class="input-line">
				<input type='text' class='inputText' required></input>
				<span class="floating-label">Sexe</span>
			</div>

			<div class="input-line">
				<input type='text' class='inputText' required></input>
				<span class="floating-label">Numéro de sécurité sociale</span>
			</div>

			<div class="input-line">
				<input type='text' class='inputText' required></input>
				<span class="floating-label">E-mail</span>
			</div>

			<div class="input-line">
				<input type="password" class="inputText" required/></input>
				<span class="floating-label">Mot de passe</span>
			</div>

			<div class="input-line">
				<input type="password" class="inputText" required/></input>
				<span class="floating-label">Répéter mot de passe</span>
			</div>

			<div class="input-line">
				<input type='text' class='inputText' required></input>
				<span class="floating-label">Hôpital</span>
			</div>

			<button class="ghost-round bright"  type="submit" name="submit" value="Register" style="margin-top: 5%;">S'inscrire</button>
		</form>
	</div>
</body>
</html>
