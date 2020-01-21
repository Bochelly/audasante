<?php
require('../config.php');

if (! $_SESSION['connected'] ) { 
	header('Location: ../index.php');
	exit();
}

?>

