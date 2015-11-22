<?php
date_default_timezone_set('NZ');
include $_SERVER['DOCUMENT_ROOT'].'/includes/magicQuotes.inc.php';
include $_SERVER['DOCUMENT_ROOT'].'/includes/helpers.inc.php';

if(isset($_POST['mail'])){
	//Validate email
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errors['email'] .= " Please enter a valid Email Address.";
	}else{
		$email = html($_POST['email']);
	}

	//Validate Name
	if(empty($_POST['name']) || $_POST['name'] == " "){
		$name = "[Name Not Specified]";
	}else{
		$name = html($_POST['name']);
	}

	//validate subject
	if(empty($_POST['subject']) || $_POST['subject'] == " "){
		$subject = "[Subject Not Specified]";
	}else{
		$subject = html($_POST['subject']);
	}

	//prepare first line of message
	$message = "Message from $name at $email\r\n\r\n";

	//validate message
	if(empty($_POST['message']) || $_POST['message'] == " "){
		$message .= "[Message Not Specified]";
	}else{
		$message .= html($_POST['message']);
	}

	//validate human test
	/*if(empty($_POST['test'])){
		$errors['test'] .= " Please complete the human test.";
	}elseif($_POST['test'] != "computer"){
		$errors['test'] .= " Incorrect answer; Hint: comp...";
	}*/

	if(empty($errors)){
		//Prepare the mail
		$to = "aidan.inquires+profile@gmail.com";

		$header  = "From: noreply@profile.aidancheyd.info" . "\r\n" .
		"X-Mailer:PHP/" . phpversion() . "\r\n" .
		"Errors-To: webmaster@profile.aidancheyd.info";


		// Send the email
		try {
			mail($to, $subject, $message, $header);
			$_SESSION['messages'] = "Your enquiry has been sent.<br>Thank you.";
		} catch (Exception $e) {
			$_SESSION['messages'] = "Email failed.<br>Your enquiry was not sent.";
		}
	}
}

include 'website.html.php';