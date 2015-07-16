<?php 
	session_start();
	$la = $_SESSION['lang'];
	include 'strings.php';
	include '../../strings.php';
	if(!isset($_GET['id'])) {
		echo '<h3>'.$p2Error[$la].'</h3>';
	} else {
		$articleID = $_GET['id'];
		echo '<h3>'.$lang[$la]['p2'][$articleID.'title'].'</h3>';
		echo $article_lang[$la][$articleID];
	}
?>