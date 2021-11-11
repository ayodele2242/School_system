<?php

include('class.phpmailer.php');

function Send_Email($body,$address,$title){
	$mail             = new PHPMailer(); // defaults to using php "mail()"
$mail->IsSendmail(); // telling the class to use SendMail transport

//$body             = file_get_contents('contents.html');
$body             = @eregi_replace("[\]",'',$body);

//$mail->AddReplyTo("name@yourdomain.com","First Last");

$mail->SetFrom('info@osunjobcenter.org', 'Osun Job Center');

//$mail->AddReplyTo("name@yourdomain.com","First Last");

//$address = "whoto@otherdomain.com";
$mail->AddAddress($address, $address);

$mail->Subject    = $title;

//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message successfully sent!";
}
}

function Send_Email_Old($body,$address,$title){


$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch

$mail->IsSMTP(); // telling the class to use SMTP

try {
  $mail->Host       = "smtp.sendgrid.net"; // SMTP server
  $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->Host       = "smtp.sendgrid.net"; // sets the SMTP server
  $mail->Port       = 26;                    // set the SMTP port for the GMAIL server
  $mail->Username   = "cedarview"; // SMTP account username
  $mail->Password   = "$Glorious2011";        // SMTP account password
 // $mail->AddReplyTo('name@yourdomain.com', 'First Last');
  $mail->AddAddress($address, $address);
  $mail->SetFrom('Osun Job Center');
 // $mail->AddReplyTo('name@yourdomain.com', 'First Last');
  $mail->Subject = $title;
 // $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
  $mail->MsgHTML($body);
  //$mail->AddAttachment('images/phpmailer.gif');      // attachment
 // $mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
  $mail->Send();
  //echo "Message Sent OK</p>\n";
} catch (phpmailerException $e) {
  //echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  //echo $e->getMessage(); //Boring error messages from anything else!
}
}

?>