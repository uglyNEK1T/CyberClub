<?php
require 'db_connect.php';
require 'send_sms.php';

session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

// Обработка отправки SMS от админа
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['booking_id'], $_POST['sms_text'])) {
    $id = (int)$_POST['booking_id'];
    $sms_text = trim($_POST['sms_text']);

    // Получаем данные бронирования
    $stmt = $pdo->prepare("SELECT name, phone, date, time FROM bookings WHERE id = ?");
    $stmt->execute([$id]);
    $booking = $stmt->fetch();

    if ($booking && $sms_text !== '') {
        // Формируем текст SMS
        $text = "Здравствуйте, {$booking['name']}! Сообщение от клуба: {$sms_text}";

        $result = sendSms($booking['phone'], $text);

        if ($result['status'] === 'OK') {
            $success_msg = "SMS успешно отправлено клиенту.";
        } else {
            $error_msg = "Ошибка при отправке SMS: " . ($result['sms'][0]['status_text'] ?? 'неизвестная ошибка');
        }
    } else {
        $error_msg = "Пожалуйста, введите текст сообщения.";
    }
}

// Получаем данные
$games = $pdo->query("SELECT * FROM games")->fetchAll();
$bookings = $pdo->query("SELECT * FROM bookings ORDER BY date DESC, time DESC")->fetchAll();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <title>Админ-панель: Игры и Бронирования</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
<div class="panel">

    <h1>Список игр</h1>
    <a class="button" href="add.php">➕ Добавить игру</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Жанр</th>
            <th>Разработчик</th>
            <th>Платформы</th>
            <th>Действия</th>
        </tr>
        <?php foreach ($games as $game): ?>
        <tr>
            <td><?= $game['id'] ?></td>
            <td><?= htmlspecialchars($game['title']) ?></td>
            <td><?= htmlspecialchars($game['genre']) ?></td>
            <td><?= htmlspecialchars($game['developer']) ?></td>
            <td><?= htmlspecialchars($game['platforms']) ?></td>
            <td class="actions">
                <a href="edit.php?id=<?= $game['id'] ?>">✏️</a>
                <a href="delete.php?id=<?= $game['id'] ?>" onclick="return confirm('Удалить игру?')">🗑️</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2 style="color:#e73ab8; margin-top:40px;">Бронирования</h2>

    <?php if (!empty($success_msg)): ?>
        <p style="color:green;"><?= htmlspecialchars($success_msg) ?></p>
    <?php elseif (!empty($error_msg)): ?>
        <p style="color:red;"><?= htmlspecialchars($error_msg) ?></p>
    <?php endif; ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Дата</th>
            <th>Время</th>
            <th>Гости</th>
            <th>Телефон</th>
            <th>Пожелания клиента</th>
            <th>Ответ админа (SMS)</th>
            <th>Отправить</th>
        </tr>
        <?php foreach ($bookings as $b): ?>
        <tr>
            <td><?= $b['id'] ?></td>
            <td><?= htmlspecialchars($b['name']) ?></td>
            <td><?= $b['date'] ?></td>
            <td><?= $b['time'] ?></td>
            <td><?= $b['guests'] ?></td>
            <td><?= htmlspecialchars($b['phone']) ?></td>
            <td><?= htmlspecialchars($b['message'] ?? '') ?></td>
            <form method="post" style="margin:0;">
                <td>
                    <input 
                        type="text" 
                        name="sms_text" 
                        placeholder="Введите сообщение для клиента" 
                        style="width:100%; padding:4px; border-radius:6px; border:1px solid #ccc;"
                        required
                    />
                </td>
                <td>
                    <input type="hidden" name="booking_id" value="<?= $b['id'] ?>" />
                    <button type="submit" class="button">Отправить</button>
                </td>
            </form>
        </tr>
        <?php endforeach; ?>
    </table>

    <br>
    <a href="logout.php" class="button">🚪 Выйти</a>
</div>
</body>
</html>
