<?php
//Init PHPMailer
require './src/ClassSendEmailSmtp.php';

$mail = new SendEmailSmtp;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
	//Sanitaze inputs
    $email   = stripslashes(trim($_POST['email']));

    // Send email to $email and response with .json
	$mail->send_email($email);
}

?>