<?php
$name = $_POST['user_name'];
$email = $_POST['user_email'];
$message = $_POST['comments'];
$formcontent=" From: $name \n Message: $message";
$recipient = "susannestrom@outlook.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
header("Location: index.html");
?>