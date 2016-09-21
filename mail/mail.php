

<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mailgun.org';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'postmaster@oriole-software.com';                 // SMTP username
$mail->Password = '6a26ed61e5900a472807eb47d1a87d56';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('bot@oriole-software.com', "Oriole Feedback");
$mail->addAddress('contact@oriole-software.com', 'Oriole Software');     // Add a recipient
// Name is optional
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'New feedback';

$mail->Body = "<html><body>" . "Name: " . $_POST['name'] . "<br/>" . "Surname: " . $_POST['surname'] . "<br/>" . "Email: " . $_POST['email'] . "<br/><br/>" . "Feedback: " . "<br/>" . $_POST['message'] . "</body></html>";

$mail->AltBody = "\n" . "Name: " . $_POST['name'] . "\n" . "Surname: " . $_POST['surname'] . "\n" . "Email: " . $_POST['email'] . "\n" . "Writed next: " . "\n\n" . $_POST['message'];

if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>
