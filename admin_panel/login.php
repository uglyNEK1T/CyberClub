<?php
require 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("SELECT * FROM admins WHERE username = ?");
    $stmt->execute([$_POST['username']]);
    $admin = $stmt->fetch();

    if ($admin && password_verify($_POST['password'], $admin['password'])) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: /admin_panel/index.php");
        exit;
    } else {
        $error = "Неверный логин или пароль";
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/komarova/main.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">
	<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js" type="text/javascript"></script>
    <title>Вход в админ-панель</title>
    <link rel="icon" href="/png/SnapBG.ai_1742599722466 1.png" type="image/gif" sizes="12x16">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url(/img/Group 48.png) no-repeat center center;
            background-size: cover;
            }
        .login-container {
            display: flex;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            gap: 20px;
        }
        .logo_line img {
            padding-right: 0px;
            width: 124px;
            height: 162px;
        }
        .logo{
            gap: 14px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .back_cont{
            background-color: #00000091;
            height: 790px;
            width: 743px;
            align-items: center;
            display: flex;
            justify-content: center;
            border-radius: 82px;
        }
        .container {
            height: 100%;
            background-repeat: no-repeat;
            padding-top: 70px;
            padding-left: 0px;
            padding-bottom: 235px;
            justify-content: center;
            display: flex;
            background-size: cover;
        }
        .logo_line{
            flex-direction: column;
        }
        form{
            display: flex;
            flex-direction: column;
            gap: 20px;
            width: 565px;
        }
        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box; /* Чтобы padding не увеличивал ширину */
            background-color: #fff;
            color: black;
            font-size: 23px;
            font-family: SemiBold;
            text-align: center;
            color: #e73ab8;
            border: none;
            transition: 0.3s;
        }

        .entrance {
            border-radius: 10px;
            width: 331px;
            height: 46px;
            font-weight: 600;
            font-size: 23px;
            font-family: SemiBold;
            text-align: center;
            color: #e73ab8;
            border: none;
            transition: 0.3s;
            background-color: white;
            cursor: pointer;
            width: 100%;
        }
        .entrance:hover{
            transform: scale(1.1);
            border: 2px #e73ab8;
            background-color: #e73ab8;
            color: white;
            border: white 2px solid;
        }
        .entrance:active{
            transition: 0.1s;
            transform: scale(0.9);
            border: 2px #e73ab8;
            background-color: white;
            color: #e73ab8 ;
        }
        .error-message {
            color: red;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <section class="banner">
            <div class="menu">
                <ul class="navbar">
                    <a href="/komarova/index.php" class="profsous_str">Главная</a>
                    <a href="/about.html" class="menu-item">О клубе</a>
                    <a href="#zones" class="menu-item">Зоны</a>
                    <a href="/komarova/price/price.php" class="menu-item">Цены</a>
                    <a href="#photo" class="menu-item">Фото</a>
                    <a href="#stock" class="menu-item">Акции</a>
                </ul>
            </div>
            <div class="container">
                <div class="back_cont">
                <div class="logo">
                    <div class="logo_line">
                        <img src="/png/SnapBG.ai_1742599722466 1.png" alt=""  style="width: 284px; height: 253px;">
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
                            <?php if (isset($error)) echo "<p>$error</p>"; ?>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <main>
    </main>
    <footer>
    </footer>
    <script>
        // Маска для телефона
        const phoneInput = document.querySelector('.inp_tel');
    
        phoneInput.addEventListener('input', function (e) {
            let value = e.target.value.replace(/\D/g, '');
            let formattedValue = '';
            if (value.length === 1 && e.data !== null && e.data.match(/\d/)) { // Проверяем, что введен именно символ, а не вставка
                value = '7' + value.substring(1);
            }
            
            if (value.length > 0) {
                formattedValue = '+' + value[0];
            }
            if (value.length > 1) {
                formattedValue += ' (' + value.substring(1, 4);
            }
            if (value.length > 4) {
                formattedValue += ') ' + value.substring(4, 7);
            }
            if (value.length > 7) {
                formattedValue += '-' + value.substring(7, 9);
            }
            if (value.length > 9) {
                formattedValue += '-' + value.substring(9, 11);
            }
    
            e.target.value = formattedValue;
        });
    </script>
    <script src="/komarova/arr.js"></script>
</body>
</html>