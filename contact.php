<?php
	$name = $_POST['name'];
	$visitor_email = $POST['email'];
	$message = $POST['message'];


	$email_from = 'wetieyou@gmail.com';

	$email_subject = "New Client Approach";

	$email_body = "User Name: $name.\n".
						"User Email: $visitor_email.\n".
							"User Message: $message.\n";


	$to = "wetieyou@gmail.com";

	$headers = "From: $email_from\r\n";
	$headers = "Reply-To: $visitor_email\r\n";
	mail($to,$email_subject,$email_body,$headers);

	header("location: contact.html");						

/>