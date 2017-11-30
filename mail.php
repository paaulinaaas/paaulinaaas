<?php
$to      = 'psikora089@gmail.com';
$name    = $_POST['name'];
$email   = $_POST['email'];
$subject = 'Nowy e-mail od ' . $name . ' (' . $email . ')';
$contact = $_POST['contact'];
$message = $_POST['message'];
$headers = 'From: ' . $name . ' (' . $email . ')';
$headers .= 'Content-Type: text/html; charset=utf-8';
mail($to, $subject, $message, $contact, $headers);
echo 'Message sent :)';
?>

12.5 cytaty, 2 strony, gra