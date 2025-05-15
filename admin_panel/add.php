<?php
require 'db_connect.php';
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("INSERT INTO games (title, description, developer, genre, platforms, image_url, peculiarities) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([
        $_POST['title'],
        $_POST['description'],
        $_POST['developer'],
        $_POST['genre'],
        $_POST['platforms'],
        $_POST['image_url'],
        $_POST['peculiarities']
    ]);
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавить игру</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="panel">
    <h1>Добавить игру</h1>
    <form method="POST">
        <input type="text" name="title" placeholder="Название" required>
        <input type="text" name="description" placeholder="Описание">
        <input type="text" name="developer" placeholder="Разработчик">
        <input type="text" name="genre" placeholder="Жанр">
        <input type="text" name="platforms" placeholder="Платформы">
        <input type="text" name="image_url" placeholder="URL изображения">
        <input type="text" name="peculiarities" placeholder="Особенности">
        <button class="entrance" type="submit">Добавить</button>
    </form>
    <a href="index.php" class="button">⬅ Назад</a>
</div>
</body>
</html>