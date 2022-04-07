<?php 
 
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/POP3.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send throughx
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'huynhnhatlinh1206@gmail.com';                     //SMTP username
    $mail->Password   = '"Barcelona1206"';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->SMTPSecure = "tls";
    $mail->CharSet = 'UTF-8';     

    //Recipients
    $mail->setFrom('huynhnhatlinh1206@gmail.com', 'Linh');
    $mail->addAddress('thitluocchammam1206@gmail.com', 'Joe User');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Hello';
    $mail->Body    = 'Chào Cậu';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}