

<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.zoho.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'bot@oriole-software.com';                 // SMTP username
$mail->Password = '132465bot';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('bot@oriole-software.com');
$mail->addAddress('contact@oriole-software.com', 'Oriole Software');     // Add a recipient
// Name is optional
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'New feedback';
$mail->Body = "\n" . "Name: " . $_POST['name'] . "\n" . "Surname: " . $_POST['surname'] . "\n" . "Email: " . $_POST['email'] . "\n" . "Writed next: " . "\n\n" . $_POST['message'];
//$mail->Body = "</br>" . "Name: " . $_POST['name'] . "</br> " . "Surname: " . $_POST['surname'] . "</br>" . "Email: " . $_POST['email'] . "</br>" . "Writed next: " . "</br></br>" . $_POST['message'];

$mail->AltBody = "\n" . "Name: " . $_POST['name'] . "\n" . "Surname: " . $_POST['surname'] . "\n" . "Email: " . $_POST['email'] . "\n" . "Writed next: " . "\n\n" . $_POST['message'];

if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>
