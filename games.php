<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "cyberclub"; 


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT id, title, image_url FROM games";  
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/komarova/main.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">
	<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js" type="text/javascript"></script>
    <title>Комарова | Игры</title>
    <link rel="icon" href="/png/SnapBG.ai_1742599722466 1.png" type="image/gif" sizes="12x16">
</head>
<body>
    <header>
        <section class="banner">
            <div class="menu">
                <input type="checkbox" id="burger-checkbox" class="burger-checkbox">
                <label for="burger-checkbox" class="burger"></label>
                <ul class="navbar">
                    <a href="/komarova/index.php" class="menu-item">Главная</a>
                    <a href="/about.html" class="menu-item">О клубе</a>
                    <a href="/komarova/price/price.php" class="menu-item">Цены</a>
                    <a href="#photo" class="menu-item">Фото</a>
                    <a href="#stock" class="menu-item">Акции</a>
                    <a href="/tour.html" class="menu-item">Турниры</a>
                </ul>
            </div>
            <div class="container">
                <div class="logo">
                    <div class="logo_line">
                        <img src="/png/SnapBG.ai_1742599722466 1.png" alt=""  style="width: 284px; height: 253px;">
                        <div class="text_logo">
                            <h1>CYBERCLUB</h1>
                            <p>НА КОМАРОВА</p>
                        </div>
                    </div>
                    <div class="logo_desc">
                        <ul>
                            <li>Комарова 22/10к1</li>
                            <li>Работаем круглосуточно!</li>
                            <li>8 977 320 88 88</li>
                        </ul>
                    </div>
                    <a href="#sec_rezerv"><button class="rezerv">Забронировать!</button></a>
                </div>
            </div>
        </section>
    </header>
    <main>
        <section id="games_sec" class="games_sec">
            <div class="container_games_sec">
                <div class="title_txt_games">
                    <h1>ИГРЫ В КОМПЬЮТЕРНЫХ КЛУБАХ</h1>
                    <p>Также, Вы можете взять в аренду аккаунт, в библиотеке которой находится более 400 игр. Всего лишь за 25 руб/в час.  
                         *В каждом клубе игры могут отличаться.О Наличи уточняйте при бронировании ПК.</p>
                </div>
                <div class="col_games">
                    <?php
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        
                        if ($result->num_rows > 0) {
                            echo "";  // Добавил список для лучшей структуры
                            while($row = $result->fetch_assoc()) {
                                echo '<div class="card_game">';
                                echo '<a href="game_desc.php?id=' . urlencode($row["id"]) . '">';
                                echo '<img src="' . htmlspecialchars($row["image_url"]) . '" alt="' . htmlspecialchars($row["title"]) . '">'; //Изменил title на title
                                echo '<p>'.htmlspecialchars($row["title"]).'</p>'; //Изменил title на title
                                echo '</a>';
                                echo '</div>';
                            }
                            echo "";
                        } else {
                            echo "<p>Нет игр в базе данных.</p>";
                        }
                        
                        $conn->close();
                    ?>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <section class="footer">
            <div class="footer_container">
                <img src="/png/SnapBG.ai_1742599722466 1.png" alt="" class="logo_footer">
                <div class="footer_menu">
                    <ul class="footer-menu">
                        <a href="komarova/index.php" class="menu-item">Главная</a>
                        <a href="/about.html" class="menu-item">О клубе</a>
                        <a href="/komarova/index.html#zones" class="menu-item">Зоны</a>
                        <a href="/komarova/price/price.php" class="menu-item">Цены</a>
                        <a href="/games.php" class="menu-item">Игры</a>
                        <a href="/questions.html" class="menu-item">Вопрос - ответ</a>
                    </ul>
                    <p class="foot_line"></p>
                    <div class="footer_menu_two">
                        <ul class="footer-menu">
                            <a href="/rules.html" class="profsous_str">Правила</a>
                            <div class="icons_footer">
                                <a href="#stock" class="menu-item"><img src="/icons/discord.png" alt=""></a>
                                <a href="https://t.me/OmAcademyRobot" class="menu-item"><img src="/icons/telegram.png" alt=""></a>
                                <a href="https://wa.me/79609853532" class="menu-item"><img src="/icons/whatsapp.png" alt=""></a>
                                <a href="https://vk.com/omeconom" class="menu-item"><svg width="46" height="46" viewBox="0 0 46 46" fill="#fff" xmlns="http://www.w3.org/2000/svg">
                                    <path style="fill: white;" d="M23 0C10.318 0 0 10.318 0 23C0 35.682 10.318 46 23 46C35.683 46 46 35.682 46 23C46 10.318 35.683 0 23 0ZM32.973 27.535C35.21 29.521 35.675 30.23 35.751 30.351C36.678 31.821 34.723 32 34.723 32H30.603C30.603 32 29.6 32.011 28.743 31.443C27.346 30.528 25.883 28.754 24.855 29.062C23.992 29.32 24 30.486 24 31.483C24 31.84 23.693 32 23 32C22.307 32 22.019 32 21.712 32C19.455 32 17.006 31.24 14.563 28.687C11.107 25.078 8.076 17.808 8.076 17.808C8.076 17.808 7.897 17.442 8.092 17.219C8.313 16.969 8.914 17.001 8.914 17.001L12.909 17C12.909 17 13.285 17.071 13.555 17.261C13.778 17.417 13.902 17.715 13.902 17.715C13.902 17.715 14.573 19.931 15.428 21.344C17.098 24.102 17.875 24.172 18.442 23.875C19.27 23.445 19 20.513 19 20.513C19 20.513 19.037 19.254 18.605 18.693C18.272 18.259 17.635 18.028 17.357 17.992C17.132 17.963 17.508 17.569 17.987 17.344C18.627 17.059 19.498 16.986 21 17C22.169 17.011 22.506 17.081 22.962 17.186C24.341 17.504 24 18.343 24 21.289C24 22.233 23.87 23.56 24.582 24C24.889 24.19 25.941 24.422 27.813 21.382C28.702 19.94 29.409 17.548 29.409 17.548C29.409 17.548 29.555 17.285 29.782 17.155C30.014 17.022 30.007 17.025 30.325 17.025C30.643 17.025 33.832 17 34.532 17C35.231 17 35.887 16.992 36 17.402C36.162 17.991 35.484 20.009 33.766 22.199C30.943 25.793 30.63 25.457 32.973 27.535Z" fill="black" />
                                  </svg></a>
                            </div>
                            <a href="#stock" class="menu-item">Создание сайта - wertyxtar2k</a>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="btn-up btn-up_hide"></div>
    </footer>
    <script src="/js/slider.js"></script>
    <script src="/komarova/arr.js"></script>
</body>
</html>