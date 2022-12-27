<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'WebDesign@gmail.com';

	$email_subject = 'New message from gw';

	$email_body = 'User name: $name.\n'.
				  'User email: $visitor_email.\n'.
				  'User message: $message.\n';

	$to = 'briansmithopoku307@gmail.com';

	$headers = 'From: $email_from \r\n';

	$headers .= 'Reply-to: $visitor_email \r\n';

	mail($to,$email_subject,$email_body,$headers);

	header('Location: page3.html');

?>
