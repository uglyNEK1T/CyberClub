<?php
require 'db_connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("SELECT * FROM admins WHERE username = ?");
    $stmt->execute([$_POST['username']]);
    $admin = $stmt->fetch();
    if ($admin && password_verify($_POST['password'], $admin['password'])) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: index.php");
        exit;
    } else {
        $error = "Неверный логин или пароль";
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход в админ-панель</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <section class="banner">
        <div class="container">
            <div class="logo">
                <div class="logo_line">
                    <img src="/png/SnapBG.ai_1742599722466 1.png" alt="">
                    <div class="text_logo">
                        <h1>ВХОД</h1>
                        <p>В АДМИН-ПАНЕЛЬ</p>
                    </div>
                </div>
                <div class="login-container">
                    <form method="POST">
                        <input type="text" name="username" placeholder="Логин" required>
                        <input type="password" name="password" placeholder="Пароль" required>
                        <button class="entrance" type="submit">Войти</button>
                        <?php if (isset($error)) echo "<p class='error-message'>$error</p>"; ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
</header>
</body>
</html>