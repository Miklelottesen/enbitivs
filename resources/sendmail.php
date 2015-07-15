<?php
	session_start();
	$returnSuccess = false; // Will change to true if mail is successfully sent
	if(!isset($_SESSION['last_post']) || $_SESSION['last_post'] + 10 < time()) {
	//	echo 'No flooding violations..<br />';
		if (isset($_GET['email']) && isset($_GET['name']) && isset($_GET['message']) && isset($_GET['callme'])) {
		//	echo 'All fields filled out..<br />';
			// If mail, name and message are filled
			$name = base64_decode($_GET['name']);
			$email = base64_decode($_GET['email']);
			$message = base64_decode($_GET['message']);
			$callme = $_GET['callme'];

			if (!preg_match( "/[\r\n]/", $name ) && !preg_match("/[\r\n]/", $email) && !filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			//	echo 'No injections or invalid email..<br />';
				// If no injections were found and email is a valid email
				$callback = $_GET['callback'];

				$message = '<p><strong>From: </strong>'.$name.'</p><p>'.$message.'</p>';
				if($callme) {
					$message = '<p><strong>This user wishes to be called on: '.$_GET["phone"].'</strong></p>'.$message;
				}

				$message = '
				<html> 
				  <body> 
				  '.$message.'
				  </body> 
				</html> 
				';

				$_SESSION['last_post'] = time();
				$returnSuccess = true;
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: '.$email."\r\n";
				$headers .= 'Reply-To: '.$email."\r\n";
				//'X-Mailer: PHP/'.phpversion();

				mail('info@enbit.dk', 'Mail from webform', $message, $headers);
			} 
		}
	}
	echo $callback.'('.json_encode($returnSuccess).')';
	die();
?>