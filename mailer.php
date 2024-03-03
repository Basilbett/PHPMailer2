<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__."/vendor/autoload.php";

$mail= new PHPMailer(true);
//$mail->SMTPDebug=SMTP::DEBUG_SERVER;
 
$mail->isSMTP(true);
$mail->SMPTAuth=true;
$mail->host="smtp.gmail.com";
$mail->SMTPSecure=PHPMailer::ENCRYPTION_STARTTLS;
$mail->port=587;
$mail->username="tererbasil2@gmail.com";
$mail->password="Basil@2002";

$mail->isHtml(true);

return $mail;
