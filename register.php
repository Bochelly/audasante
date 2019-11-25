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
		  margin-left: 22% ;
		  margin-right: 22% ;
		  margin-bottom: 22%;
		  height: 35%;
		}
		.input-line{
			  height:18%;
			  width:100%;
			  margin-bottom: 2%;
			}

		.input-line input:focus ~ .floating-label,
		.input-line input:placeholder-shown ~ .floating-label,
		.input-line input:not(:focus):valid ~ .floating-label{
		  left: 0.1vw;
		  top: -90%;
		  font-size: 0.9vw;
		}

		div{
			font-size : 1.2vw;
		}
		a
		{
		  text-decoration : underline;
		  color: rgba(67, 66, 93, 0.7);
		  width: 100%;
		  font-size: 1.2vw;
		  font-weight: 300;
		  text-align: left;
		  transition-duration: 0.2s;
		  margin-top: 3%;
		  margin-left: 4%;
		}

	</style>

</head>



<body>


<div id=log-img></div>
<div id=log-connect-container>

	<div class='window'>
		<div class='welcome' style="margin-bottom:1.5%;">AUDASANTÉ</div>

		<div class='subtitle' style="margin-bottom:3%;">Inscrivez-vous pour accéder à votre espace personnel</div>

		<form method="get" action="#">

			<div class="input-line" style="width : 47%; display : inline;">
				<input type='text' class='inputText' required></input>
				<span class="floating-label">Prénom</span>
			</div>

			<div class="input-line" style="width : 47%; display : inline;margin-left:6%;">
				<input type='text' class='inputText' required></input>
				<span class="floating-label">Nom</span>
			</div>
		
			<div class="input-line">
				<input type='text' class='inputText' required></input>
				<span class="floating-label">Numéro de sécurité sociale</span>
			</div>

			<div class="input-line">
				Date de naissance : <input type='date' class='inputText' required></input>
				
			</div>	
			<div class="input-line">
				<br/>
				Sexe : <INPUT type="radio" name="sex" value="H" checked></INPUT> Homme <INPUT type="radio" name="sex" value="F"></INPUT> Femme<br/>
				
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

			<button class="ghost-round bright"  type="submit" name="submit" value="Register" style="margin-top: 5%;">S'inscrire</button><br/>
			<a href="index">Vous avez déjà un compte ? Identifiez-vous.</a>
		</form>

		
	</div>
</body>
</html>
