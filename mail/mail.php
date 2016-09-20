

<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mailgun.org';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'postmaster@sandbox195b4245e5fa4f9981afc522f651d7c4.mailgun.org';                 // SMTP username
$mail->Password = '003a5b7481570f54ce58400f89426a5e';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('bot@oriole-software.com');
$mail->addAddress('contact@oriole-software.com', 'Oriole Software');     // Add a recipient
// Name is optional
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'New feedback';
$mail->Body = "</br>" . "Name: " . $_POST['name'] . "</br> " . "Surname: " . $_POST['surname'] . "</br>" . "Email: " . $_POST['email'] . "</br>" . "Writed next: " . "</br></br>" . $_POST['message'];

$mail->AltBody = "\n" . "Name: " . $_POST['name'] . "\n" . "Surname: " . $_POST['surname'] . "\n" . "Email: " . $_POST['email'] . "\n" . "Writed next: " . "\n\n" . $_POST['message'];

if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>
