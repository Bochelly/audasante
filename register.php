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
		  margin-left: 10% ;
		  margin-right: 10% ;
		  margin-bottom: 15% ; 
		  height: 40%;
		}

		.input-line {
  			height:20%;
 			width: 100%;
 			padding-bottom: 2%;
		}

		.input-line input:focus ~ .floating-label,
		.input-line input:placeholder-shown ~ .floating-label,
		.input-line input:not(:focus):valid ~ .floating-label{
		  left: 0.1vw;
		  top: -100%;
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

			<div class='gauche'>
				<div class="input-line">
					<input type='text' class='inputText' required></input>
					Nom
				</div>

				<div class="input-line">
					<input type='text' class='inputText' required></input>
					Prénom
				</div>

				<div class="input-line">
					<input type='text' class='inputText' required></input>
					Numéro de sécurité sociale
				</div>

				<div class="input-line">
					<input type='date' class='inputText' required></input>
					Date de naissance
				</div>

				<div class="input-line" class="bouton_radio">
					<INPUT type="radio" name="sex" value="H" checked> Homme <INPUT type="radio" name="sex" value="F"> Femme<br/>
					Sexe
				</div>

				<div class="input-line">
					<input type='text' class='inputText' required></input>
					Hôpital
				</div>
			</div>


			<div class='droite'>
				<div class="input-line">
					<input type='email' class='inputText' required></input>
					E-mail
				</div>

				<div class="input-line">
					<input type="password" class="inputText" required/></input>
					Mot de passe
				</div>

				<div class="input-line">
					<input type="password" class="inputText" required/></input>
					Répéter mot de passe
				</div>
			</div>
			<button class="ghost-round bright"  type="submit" name="submit" value="Register" style="margin-top: 5%;">S'inscrire</button>
		</form>
	</div>
</body>
</html>
