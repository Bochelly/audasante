<?php
	session_start();
	
	$email   =($_POST['email']);
	$objet   =($_POST['objet']);
	$message =($_POST['message']);

	$email=htmlspecialchars($email);
	$message = htmlspecialchars($message);
	$objet = htmlspecialchars($objet);

	$message = "<html>
					<body>
						<div>
							De : ".$email." <br>
							".$message."
						</div>
					</body>
				</html>";
$header="MIME-Version: 1.0\r\n";
$header.='From: felix@gmail.com'."\n";
$header.='Content-Type:text/html; charset="utf-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';


$envoie=mail("audasante.technologies@gmail.com", $objet, $message, $header);

if($envoie){
	$_SESSION['message_mail']='Votre message a bien été envoyé';
	header('Location: assistance.php');
	exit();

}
else{
	$_SESSION['message_mail']='Il y a eu un problème lors de l\'envoi du mail, réessayer';
	header('Location: assistance.php');
	exit();

}
?>