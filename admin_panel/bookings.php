<?php
require_once 'send_sms.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['booking_id'])) {
    $id = (int)$_POST['booking_id'];
    $status = $_POST['status'];
    $adminMessage = $_POST['message'];

    $stmt = $pdo->prepare("UPDATE bookings SET status = ?, message = ? WHERE id = ?");
    $stmt->execute([$status, $adminMessage, $id]);

    // Получим данные брони
    $stmt = $pdo->prepare("SELECT name, phone, date, time FROM bookings WHERE id = ?");
    $stmt->execute([$id]);
    $booking = $stmt->fetch();

    // Отправим уведомление
    if ($booking) {
        $text = "Здравствуйте, {$booking['name']}! Статус вашего бронирования на {$booking['date']} в {$booking['time']} обновлён: {$status}.";
        if (!empty($adminMessage)) {
            $text .= " Комментарий: {$adminMessage}";
        }
        sendSms($booking['phone'], $text);
    }
}

?>