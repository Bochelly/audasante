<?php

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
	echo "YES";
}
else{
	echo "NEIN";
}
?>