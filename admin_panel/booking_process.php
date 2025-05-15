<?php
require_once 'send_sms.php';

// После записи в базу:
$message = "Здравствуйте, {$name}! Ваше бронирование на {$date} в {$time} успешно получено. Мы с вами свяжемся.";
$response = sendSms($phone, $message);

// Можно проверить успешность:
if ($response['status'] !== 'OK') {
    error_log("Ошибка SMS: " . print_r($response, true));
}

?>