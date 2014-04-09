
<?php
include 'includes/magicQuotes.inc.php';

if(isset($_POST['email'])){

	// Information Validation and email construction
	$error = "Entered information was incorrect:";
	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$error .= "<br>- Please enter a valid Email Address.";
	}
	else{
		$email = strip_tags($_POST['email']);
	}
	if(empty($_POST['name']) && $_POST['name'] = " "){
		$name = "!Name Not Specified!";
	}
	else{
		$name = strip_tags($_POST['name']);
	}
	if(empty($_POST['subject']) && $_POST['subject'] = " "){
		$subject = "!Subject Not Specified!";		
	}
	else{
		$subject = strip_tags($_POST['subject']);
	}

	$message = "Message from $name at $email\r\n\r\n";

	if(empty($_POST['message']) && $_POST['message'] = " "){
		$message .= "!Message Not Specified!";
	}
	else{
		$message .= strip_tags($_POST['message']);
	}
	if($error != "Entered information was incorrect:"){
		include "error.html.php";
		unset($_POST);
		exit();
	}

	$to = "aidan.inquires@gmail.com";

	$header  = "From: $to" . "\r\n" .
	"X-Mailer:PHP/" . phpversion() . "\r\n" .
	"Return-Path: $to" . "\r\n" .
	"Reply-To: $to" .
	"Errors-To: $to";


	// Send the email
	// The '@' surpresses errors.
	if(@mail($to, $subject, $message, $header)){
		$response = "Your enquiry has been sent.<br>Thank you.";
	}
	else{
		$response = "Your enquiry was not sent.";
	}
}
include 'website.html.php';
unset($_POST);