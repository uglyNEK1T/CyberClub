<?php
require 'db_connect.php';
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM games WHERE id = ?");
$stmt->execute([$id]);
$game = $stmt->fetch();
if (!$game) {
    echo "Игра не найдена";
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("UPDATE games SET title=?, description=?, developer=?, genre=?, platforms=?, image_url=?, peculiarities=? WHERE id=?");
    $stmt->execute([
        $_POST['title'],
        $_POST['description'],
        $_POST['developer'],
        $_POST['genre'],
        $_POST['platforms'],
        $_POST['image_url'],
        $_POST['peculiarities'],
        $id
    ]);
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Редактировать игру</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="panel">
    <h1>Редактировать игру</h1>
    <form method="POST">
        <input type="text" name="title" value="<?= htmlspecialchars($game['title']) ?>" required>
        <input type="text" name="description" value="<?= htmlspecialchars($game['description']) ?>">
        <input type="text" name="developer" value="<?= htmlspecialchars($game['developer']) ?>">
        <input type="text" name="genre" value="<?= htmlspecialchars($game['genre']) ?>">
        <input type="text" name="platforms" value="<?= htmlspecialchars($game['platforms']) ?>">
        <input type="text" name="image_url" value="<?= htmlspecialchars($game['image_url']) ?>">
        <input type="text" name="peculiarities" value="<?= htmlspecialchars($game['peculiarities']) ?>">
        <button class="entrance" type="submit">Сохранить</button>
    </form>
    <a href="index.php" class="button">⬅ Назад</a>
</div>
</body>
</html>