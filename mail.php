<?php
$name = $_POST['username'];
$email = $_POST['email'];
$category = $_POST['category'];
$message = $_POST['text'];


$formcontent="From: $name \n Message: $message";
$recipient = "info@kanusushi.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
