<?php
//this file is responsible for sending the email which is sent to this 
//file as an ajax submission from the front end

	if($_REQUEST['mod']=='ajax')
	{

		$to = "dakshina@pixelmock.com";

		$name  = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$message = "This inquiry was done by". $name . " and his Email is - ". $email . " and his contact number is" . $phone .$_REQUEST['message'];
		$headers = 'From: PixelMock.com Site' . "\r\n";

		mail($to,"Inquiry from Contact form", $message, $headers);
	}
?>