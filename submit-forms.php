<?php
	
	// put your email address here
	$youremail = 'm.maedche82@gmail.com';

	
	$submitType = $_POST['type'];
	
	if('newsletter' == $submitType)
	{
		// prepare message
		$body = "You have got new subscribe request from your website : \n\n";
		$body .= "Email:  $_POST[email]";
		
		if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
			$headers = "From: $_POST[email]";
		} else {
			$headers = "From: $youremail";
		}
		
		mail($youremail, 'New Subscribe', $body, $headers );
	}
	
	if('contact' == $submitType)
	{
		// prepare message
		$body  = 	"You have got new contact request from your website : \n\n";
		$body .=	"Name:  $_POST[name] \n\n";
		$body .=	"Email:  $_POST[email] \n\n";
		$body .=	"Subject:  $_POST[subject] \n\n";
		$body .=	"Message: \n";
		$body .= 	$_POST[message];
	
		if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
			$headers = "From: $_POST[email]";
		} else {
			$headers = "From: $youremail";
		}
	
		mail($youremail, 'New Contact Request', $body, $headers );
	}

?>


<!DOCTYPE HTML>
<html>
<head>
<title>Thanks!</title>
</head>
<body>
<p></p>
</body>
</html>