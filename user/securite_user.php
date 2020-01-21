<?php
require('../config.php');

if (!$_SESSION['connected']) { 
	$error_type = "notlogged";
	header('Location: ../index.php?error_type='.$error_type.'');
	exit();
}

?>

