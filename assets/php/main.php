<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent=" From: $name  \n Message $message \n email $email \n phone $phone ";
$recipient = "osideindeo@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
