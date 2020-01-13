<?php
require('config.php');

if (isset($_POST['recup_submit'],$_POST['e_mail']))
{
	if(!empty($_POST['e_mail']))
	{
		$mail = htmlspecialchars(($_POST['e_mail']));
		if ( filter_var($mail,FILTER_VALIDATE_EMAIL))
		{
			 $mailexist = $bdd->prepare('SELECT e_mail FROM user WHERE e_mail = ?');
			 $mailexist->execute(array($mail));
			 $mailexist = $mailexist->rowCount();
			 if($mailexist ==1)
			 {
			 	$recup_code = "";
			 	for($i=0; $i < 10; $i++)
			 	{
			 		$recup_code.= mt_rand(0,9);
			 	}
			 	$insert_code = $bdd->prepare('UPDATE user SET code_password= ? WHERE e_mail = ?');
			 	$insert_code -> execute(array($recup_code,$mail));
			 	



	
			 }
			 else
			 {
			 	$error = "Cette adresse mail est introuvable";
			 }
		}
		else
		{
			$error = "Adresse mail invalide";
		}
	}
	else
	{
		$error = 'veuillez entrer votre adresse mail';
	}
}





?>















<!DOCTYPE html>
<html>








<head>
	<title>Mot de passe oublié</title>
	<link rel="stylesheet" href="css/style-connect.css" type="text/css" media="screen"/>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'> 
	<link rel="icon" type="image/png" href="css/img/audalogo.png" />


	<style>
		.input-line{
			  height:15%;
			  width:100%;
			 
			  margin-bottom: 50%;
			}

		.subtitle 
		{
			padding-top: 2%;
			padding-bottom: 10%;
		}

		a
		{
		  text-decoration : underline;
		  color: rgba(67, 66, 93, 0.7);
		  font-size: 1.2vw;
		  font-weight: 300;
		  text-align: left;
		  transition-duration: 0.2s;
		  margin-top: 3%;
		  margin-left: 10%;
		}

		.ghost-round
		{
			width: 40%;
			height: 9%;
			position: absolute;
			bottom: 25%;
			left: 14%;

		}

		a{
			position: absolute;
			bottom: 15%;
			left: 30%;
		}

		@media (orientation:portrait) {

			a
			{
				font-size: 4vw;
				left: 25%;
			}
		}
	</style>

</head>








<body>


		<div id=log-img></div>
<div id=log-connect-container>

	<div class='window'>
		<div class='welcome' style="margin-bottom:1.5%;">AUDASANTÉ</div>

		<div class='subtitle' style="margin-bottom:3%;">Indiquez votre E-mail afin de recevoir un mail de réinitialisation de mot de passe</div>

		<br/>
		<form method="post">
			<div class="input-line">
				<input type='text' class='inputText' name='e_mail' required></input>
				<span class="floating-label">E-mail</span>
			</div>

			<?php if(isset($error)) 
			{
				echo '<p>'.$error.'</p>';
			}
			else{
				echo "<br/>";
			}



			 ?>

			<button class="ghost-round bright"  type="submit" name="recup_submit" value="Valider" style="margin-top: 3%; margin-left:15%;">Recevoir un mail</button><br/>

			<a href="index">Identifiez-vous.</a>
		</form>

		
	</div>
</body>
</html>




</body>
</html>