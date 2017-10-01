<?php
// Constant Defined For GMAIL Acounts
date_default_timezone_set('Etc/UTC');
//Email sender host
define("host", "smtp.gmail.com");
//Email sender port
define("port", "465");
//Email sender secure tls/ssl
define("secure", "ssl");
//Email sender user
define("user", "conctac_exampl@gmail.com");
//Email sender pass
define("pass", "password");
//Email Subject
define("prefix", "[Contac Form]");
//Email Reciever (Register Subscribers)
define("to", "receiver_susbcription@example.com");
//Email Sender Tittle
define("from", "Company Name");
//Email Error Message
define("error", "Ups, Error");
//Email Success Message
define("success", "Email sent correctly.");

?>