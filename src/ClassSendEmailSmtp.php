<?php

require './vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
require './config/config.php';

class SendEmailSmtp
{

	public function json_response($message = null, $code = 200)
	{
	    // clear the old headers
	    header_remove();
	    // set the actual code
	    http_response_code($code);
	    // set the header to make sure cache is forced
	    header("Cache-Control: no-transform,public,max-age=300,s-maxage=900");
	    // treat this as json
	    header('Content-Type: application/json');
	    $status = array(
	        200 => '200 OK',
	        400 => '400 Bad Request',
	        422 => 'Unprocessable Entity',
	        500 => '500 Internal Server Error'
	        );
	    // ok, validation error, or failure
	    header('Status: '.$status[$code]);
	    // return the encoded json
	    return json_encode(array(
	        'status' => $code < 300, // success or not?
	        'message' => $message
	        ));
	}

	public function send_email($email) 
	{
		$pattern = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

	    if (preg_match($pattern, $email)) {
			die("Header injection detected");
	    }
	    $emailIsValid = filter_var($email, FILTER_VALIDATE_EMAIL);

    	// Send email and response json
	    if ($email && $emailIsValid) {
		
			$mail = new PHPMailer;
			//Tell PHPMailer to use SMTP
			$mail->isSMTP();
			$mail->SMTPOptions = array('ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));
			//Set the hostname of the mail server
			$mail->Host = host;
			//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
			$mail->Port = port;
			//Set the encryption system to use - ssl (deprecated) or tls
			$mail->SMTPSecure = secure;
			//Whether to use SMTP authentication
			$mail->SMTPAuth = true;
			//Username to use for SMTP authentication - use full email address for gmail
			$mail->Username = user;
			//Password to use for SMTP authentication
			$mail->Password = pass;
			//Set who the message is to be sent
	        $mail->addAddress(to);
			//Set who the message is to be sent from
			$mail->setFrom(from);
			//Set email Subject
			$mail->Subject = prefix;
			//Set email body content
	        $body = "
	        <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
	        <html>
	            <head>
	                <meta charset=\"utf-8\">
	            </head>
	            <body>
	                <h1>Usuario registrado del formulario de contacto:</h1>
	                <p><strong>Email:</strong> {$email}</p>
	            </body>
			</html>";

			$mail->isHTML(true);

			$mail->Body = $body;
			//Send email, save data on users_emails.txt and show error if not
			if(!$mail->send()) {
				//echo $this->json_response('error', 400); 
				$msg = 'error';
			}
			else {
				//Save to email .txt and response success .json
				$fp = fopen('users_emails.txt', 'a');
				fwrite($fp, 'Email: '.$email.';'."\n");
				fclose($fp);
				//echo $this->json_response('success', 200); 
				$msg = 'success';
				
			}
			// redirect to index.php with msg
			header('Location: index.php?msg='.$msg);
			die();
    	} 
	}
}