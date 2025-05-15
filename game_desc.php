<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "cyberclub"; 


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$game_id = isset($_GET['id']) ? intval($_GET['id']) : 0; 

if ($game_id <= 0) {
    echo "<p>Не указан ID игры.</p>";
    exit;
}

// SQL-запрос для выборки данных об игре по ID
$sql = "SELECT id, title, image_url, description, developer, genre, platforms, peculiarities FROM games WHERE id = " . $game_id;
$result = $conn->query($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $guests = $_POST['guests'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Подготовка и выполнение SQL-запроса
    $stmt = $conn->prepare("INSERT INTO bookings (name, date, time, guests, phone, message) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiis", $name, $date, $time, $guests, $phone, $message);

    if ($stmt->execute()) {

    }

    // Закрытие запроса
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
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
                    <a href="/komarova/price/price.html" class="menu-item">Цены</a>
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
        <section class="section_game">
            <div class="container_game">
                <?php
                // Проверяем, есть ли результаты
                if ($result->num_rows > 0) {
                    // Получаем данные об игре
                    $row = $result->fetch_assoc();

                    // Выводим данные об игре
                    echo '<div class="title_game_name">';
                    echo '<h1>' . htmlspecialchars($row["title"]) . '</h1>';  // Экранируем для безопасности
                    echo '<p>' . 'Игра ' . htmlspecialchars($row["title"]) . ' в компьютерном клубе CYBERCLUB. Топовые ПК, комфортные клубы, игровые новинки.' . '</p>'; //Составляем описание
                    echo '</div>';

                    echo '<div class="game_description_one_block">';
                    echo '<img src="' . htmlspecialchars($row["image_url"]) . '" alt="' . htmlspecialchars($row["title"]) . '">'; // Экранируем для безопасности
                    echo '<p>' . htmlspecialchars($row["description"]) . '</p>'; // Экранируем для безопасности

                    echo '<div class="game-detail">';
                    echo '<p>Разработчик: ' . htmlspecialchars($row["developer"]) . '</p>'; // Экранируем для безопасности
                    echo '<p>Жанр: ' . htmlspecialchars($row["genre"]) . '</p>'; // Экранируем для безопасности
                    echo '<p>Поддерживаемые платформы: ' . htmlspecialchars($row["platforms"]) . '</p>'; // Экранируем для безопасности
                    echo '</div>';
                    echo '</div>';

                    echo '<div class="game_description_two_block">';
                    echo '<h1>Особенности ' . htmlspecialchars($row["title"]) . '</h1>'; // Экранируем для безопасности
                    echo '<p>' . htmlspecialchars($row["peculiarities"]) . '</p>';
                    echo '</div>';

                } else {
                    echo "<p>Игра не найдена.</p>";
                }

                // Закрываем подключение
                $conn->close();
                ?>
            </div>
        </section>
        <section id="sec_rezerv" class="sec_rezerv">
            <div class="rezerv_container">
                <div class="main_frame">
                    <div class="rez_col">
                        <div class="rez_conent">
                            <div class="rez_title">
                                <h1>Забронируй место!</h1>
                                <svg width="267" height="118" viewBox="0 0 267 118" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M253.939 117.061C254.525 117.646 255.475 117.646 256.061 117.061L265.607 107.515C266.192 106.929 266.192 105.979 265.607 105.393C265.021 104.808 264.071 104.808 263.485 105.393L255 113.879L246.515 105.393C245.929 104.808 244.979 104.808 244.393 105.393C243.808 105.979 243.808 106.929 244.393 107.515L253.939 117.061ZM0 3.5H225V0.5H0V3.5ZM253.5 32V116H256.5V32H253.5ZM225 3.5C240.74 3.5 253.5 16.2599 253.5 32H256.5C256.5 14.603 242.397 0.5 225 0.5V3.5Z" fill="white" />
                                </svg>
                            </div>
                            <form action="" method="POST">
                                <div class="rez_iput">
                                    <input class="inp_name" name="name" type="text" placeholder="Имя" required>
                                    <input class="inp_date" name="date" type="date" placeholder="Дата" required>
                                    <input class="inp_time" name="time" type="time" placeholder="Время" required>
                                </div>
                                <div class="rez_iput2">
                                    <input class="inp_number" name="guests" type="number" placeholder="Количество гостей" min="1" required>
                                    <input class="inp_tel" name="phone" type="tel" placeholder="Номер телефона" required>
                                <div class="rez_png">
                                    <img class="armor" src="/png/броня.png" alt="">
                                    <img class="armor2" src="/png/броня 2.png" alt="">
                                </div>    
                                <textarea name="message" placeholder="Ваши пожелания"></textarea>
                                <button class="rezerv" type="submit">Забронировать!</button>
                                <svg width="298" height="84" viewBox="0 0 298 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.93934 70.9393C0.353553 71.5251 0.353553 72.4749 0.93934 73.0607L10.4853 82.6066C11.0711 83.1924 12.0208 83.1924 12.6066 82.6066C13.1924 82.0208 13.1924 81.0711 12.6066 80.4853L4.12132 72L12.6066 63.5147C13.1924 62.9289 13.1924 61.9792 12.6066 61.3934C12.0208 60.8076 11.0711 60.8076 10.4853 61.3934L0.93934 70.9393ZM2 73.5H266V70.5H2V73.5ZM297.5 42V0H294.5V42H297.5ZM266 73.5C283.397 73.5 297.5 59.397 297.5 42H294.5C294.5 57.7401 281.74 70.5 266 70.5V73.5Z" fill="white" />
                                </svg>
                                </div>
                            </form>
                        </div>
                    </div>
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
                        <a href="/komarova/price/price.html" class="menu-item">Цены</a>
                        <a href="/games.html" class="menu-item">Игры</a>
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