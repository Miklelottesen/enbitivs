<?php 
	session_start();
	$la = $_SESSION['lang'];
	include 'strings.php';
	include '../../strings.php';
	if(!isset($_GET['id'])) {
		echo '<h3>'.$p2Error[$la].'</h3>';
	} else {
		$articleID = $_GET['id'];
		$iconName = getIcon($articleID);
		
		echo '<h3><i class="fa fa-'.$iconName.' fa-x4 artIcon"></i>&nbsp;&nbsp;'.$lang[$la]['p2'][$articleID.'title'].'</h3>';
		echo $article_lang[$la][$articleID];
	}

	function getIcon($iconID) {
		switch ($iconID) {
			case 'premium':
				return 'diamond';
			//	break;
			
			case 'app':
				return 'connectdevelop';
				break;
			
			case 'seo':
				return 'line-chart';
				break;
			
			case 'redesign':
				return 'medkit';
				break;
			
			case 'print':
				return 'print';
				break;
			
			case 'shop':
				return 'shopping-cart';
				break;
			
			case 'biz':
				return 'briefcase';
				break;
			
			case 'support':
				return 'question-circle';
				break;
			
			default:
				return 'diamond';
				break;
		}
	}
?>