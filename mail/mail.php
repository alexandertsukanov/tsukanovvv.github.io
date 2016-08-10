<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<html>

<?php
if (isset($_POST['submit'])) {
    $to = "alexander.tsukanovvv@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $last_name = $_POST['surname'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $phone = $_POST['phone'];
    $message = $first_name . " " . $last_name . " написал следующее:" . "\n\n" . $_POST['message'] . "\n" . "Телефон: " . $_POST['phone'];
    $message2 = "Копия Вашего сообщения " . $first_name . ":" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
    echo "Ваше письмо отправлено. Спасибо, " . $first_name . ", мы скоро с Вами свяжемся.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}
?>


</html>
