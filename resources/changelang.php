<?php
	session_start();
	if(isset($_GET['lang'])) {
		if($_GET['lang'] == 'da') {
			$_SESSION['lang'] = 'en';
		} else {
			$_SESSION['lang'] = 'da';
		}
	}
	header("Location: ../index.php");
	die();
?>