<?php
$email = $_POST['email'];
$message = $_POST['text'];


$formcontent="Message: SUSCRIPCION NEWSLETTER";
$recipient = "Info@kanusushi.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
sleep(5);
header('location: index.html');
exit;
?>
