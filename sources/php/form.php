<?php

$name = $_POST['name'];
$phone = $_POST['tel'];
$email = $_POST['email'];
$utm = $_POST['utms'];

$to = 'info@createro.ru, ';

$subject = 'the subject';

$message = "Сообщение с сайта Createro.ru" . "\r\n";
$message .= "                                  " . "\r\n";
$message .= "__________________________________" . "\r\n";
$message .= "                                  " . "\r\n";


$message .= "Имя - ";
$message .= $name . "\r\n";
$message .= "Телефон - ";
$message .= $phone . "\r\n";
$message .= "Почта - ";
$message .= $email . "\r\n";
$message .= "Utm метки \r\n";
$message .= $utm . "\r\n";

$headers = 'From: info@createro.ru' . "\r\n" .
    'Reply-To: info@createro.ru' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

echo true;
?>