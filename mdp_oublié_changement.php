<?php 
	require('config.php');


	if (isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2']) AND isset($_POST['code']) AND isset($_POST['e_mail']))
	{	
		$code=htmlspecialchars($_POST['code']);
		$e_mail=htmlspecialchars($_POST['e_mail']);
		$codemail =  $bdd->prepare('SELECT code_password FROM user WHERE e_mail = ?');
		$codemail->execute(array($e_mail));
		$sécurité = $codemail -> fetch();
		if($_POST['newmdp1']==$_POST['newmdp2'] AND $code == $sécurité['code_password'])
		{
			$mdp = password_hash($_POST['newmdp2'],PASSWORD_BCRYPT);
			$insertMdp = $bdd -> prepare("UPDATE user SET password = ? WHERE e_mail = ?") ;
			$insertMdp -> execute(array($mdp, $e_mail));
			$message_erreur="Mot de passe modifié avec succès";
			$updateCode = $bdd -> prepare("UPDATE user SET code_password = NULL WHERE e_mail = ?");
			$updateCode -> execute(array($e_mail));
		}
		else
		{
			$message_erreur="Il y a une erreur";
		}
	}


?>








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



		.input-line input:focus ~ .floating-label,
		.input-line input:placeholder-shown ~ .floating-label,
		.input-line input:not(:focus):valid ~ .floating-label{
		  left: 0.1vw;
		  top: -100%;
		  font-size: 0.9vw;
		}

		.erreur
		{
			font-size: 1.5vw;
			position: absolute;
			bottom: 10%;
		}


	</style>

</head>









<body>


<div id=log-img></div>
<div id=log-connect-container>

	<div class='window'>
		<div class='welcome' style="margin-bottom:1.5%;">AUDASANTÉ</div>

		<div class='subtitle' style="margin-bottom:3%;"> Modifier votre mot de passe grâce à votre code reçu par mail </div>

		<form method="POST">

		
			<div class="input-line">
				<input type='text' class='inputText' name='e_mail' required></input>
				<span class="floating-label">E-mail</span>
			</div>

			<div class="input-line">
				<input type='text' class='inputText' name='code' required></input>
				<span class="floating-label">Code de sécurité</span>
			</div>

			<div class="input-line">
				<input type="password" class="inputText" name='newmdp1' required/></input>
				<span class="floating-label">Nouveau mot de passe</span>
			</div>

			<div class="input-line">
				<input type="password" class="inputText" name='newmdp2' required/></input>
				<span class="floating-label">Répéter mot de passe</span>
			</div>


			<button class="ghost-round bright"  type="submit" name="recup_submit" value="Valider" style="margin-top: 3%; margin-left:15%;">Modifier mon mot de passe</button><br/>

			<?php 
				if (isset($message_erreur))
				{
					echo "<p class='erreur'>".$message_erreur."</p>";
				}
				else
				{
					echo "<br/>";
				}
			?>

			<a class='retour' href="index">Identifiez-vous.</a>
		</form>

		
	</div>
</body>
</html>