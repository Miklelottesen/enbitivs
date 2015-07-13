<?php
	session_start();
	if(!isset($_SESSION['lang'])) {
		$la = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		if($la != 'da')
			$la = 'en';
		$_SESSION['lang'] = $la;
	}
	else {
		$la = $_SESSION['lang'];
	}
?>