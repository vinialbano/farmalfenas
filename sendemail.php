<?php

$toemail = 'vinialbano@gmail.com'; // change this to your email id
$name = strip_tags($_POST['nome']);
$email = strip_tags($_POST['email']);
$msg = strip_tags($_POST['mensagem']);

$subject = 'Contato Site FarmAlfenas Jr';

$headers = "From: $email \r\n";
$headers .= "Reply-To: $email \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

$message = "Nova mensagem recebida pelo site FarmAlfenas Jr <br>";
$message .= "Nome: " . $name . "<br>";
$message .='Email: ' . $email . "<br>";
$message .='Mensagem: ' . $msg;
mail($toemail, $subject, $message, $headers);

?>