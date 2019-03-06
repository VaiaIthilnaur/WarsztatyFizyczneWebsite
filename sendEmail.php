<?php
	$name=$_POST['name'];
	$visitor_email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	
	$email_form='email';
	
	$email_body="User name: $name.\n".
						"User subject: $subject.\n";
							
	$to ="dobnosz@gmail.com";
						
						
	$headers="From: $visitor_email \r\n"; 
	$headers.="Replay-to: $email_form\r\n"; 
	$headers.="Subject: $subject\r\n"; 
	$headers.="Message: $message\r\n";
	
	mail($to,$email_body,$headers);
	
	header("Location: index.html");
	
	
?>