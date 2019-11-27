<?php
	/* on récupère les données du formulaire */
	$email   =($_POST['email']);
	$objet   =($_POST['objet']);
	$message =($_POST['message']);

	$email=htmlspecialchars($email);
	$message = htmlspecialchars($message);
	$objet = htmlspecialchars($objet);


	$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'From: <'.$email.'>' . "\r\n" .
				'Reply-To:'.$email. "\r\n" .
				'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
				'Content-Disposition: inline'. "\r\n" .
				'Content-Transfer-Encoding: 7bit'." \r\n" .
				'X-Mailer:PHP/'.phpversion();


    $envoi = mail('audasante@gmail.com', $objet, $message, $headers);


    if ($envoi) {
        echo '<script> alert("le mail a bien été envoyé") <script>';
    }
    else
    {
    	echo '<script> alert("erreur : le mail n\'a pas pu être envoyé, réessayer." <script>';
    }

    ?>