
<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "cyberclub"; 


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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
    $stmt->bind_param("sssiss", $name, $date, $time, $guests, $phone, $message);

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
    <title>Комарова | Цены</title>
    <link rel="stylesheet" href="/komarova/price/price.css">
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
                    <a href="/komarova/index.html#zones" class="menu-item">Зоны</a>
                    <a href="/komarova/price/price.php" class="profsous_str">Цены</a>
                    <a href="/komarova/index.html#photo" class="menu-item">Фото</a>
                    <a href="/komarova/index.html#stock" class="menu-item">Акции</a>
                    <a href="/komarova/index.html#contacts" class="menu-item">Контакты</a>
                </ul>
            </div>
            <div class="container">
                <div id="standart_zone" class="logo">
                    <div class="logo_line">
                        <div class="text_logo">
                            <h1>ЗОНА <span>СТАНДАРТ</span></h1>
                            <p>ХАРАКТЕРИСТИКИ</p>
                        </div>
                    </div>
                    
                </div>
                <div class="info_complect">
                    <div class="cards_info">
                        <div class="card_info">
                            <div class="frame_info">
                                <div class="text_card_info">
                                    <p>процессор</p>
                                    <p class="desc_info">AMD Ryzen 7 2700X</p>
                                    <img src="/png/проц.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="card_info">
                            <div class="frame_info">
                                <div class="text_card_info">
                                    <p>видеокарта</p>
                                    <p class="desc_info">GeForce GTX 1080</p>
                                    <img src="/png/карта.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="card_info">
                            <div class="frame_info">
                                <div class="text_card_info">
                                    <p>память</p>
                                    <p class="desc_info">DDR4 16GB</p>
                                    <img src="/png/память.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="card_info">
                            <div class="frame_info">
                                <div class="text_card_info">
                                    <p>накопитель</p>
                                    <p class="desc_info">NVMe SSD</p>
                                    <img src="/png/накопитель.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="card_info">
                            <div class="frame_info">
                                <div class="text_card_info">
                                    <p>монитор</p>
                                    <p class="desc_info">27" 144Hz</p>
                                    <img src="/png/монитор.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="card_info">
                            <div class="frame_info">
                                <div class="text_card_info">
                                    <p>клавиатура</p>
                                    <p class="desc_info">Gamdias Hermes E2</p>
                                    <img src="/png/клавиатура.png" alt="" style="width: 107px;height: 107px;margin-top: 14px;">
                                </div>
                            </div>
                        </div>
                        <div class="card_info">
                            <div class="frame_info">
                                <div class="text_card_info">
                                    <p>мышка</p>
                                    <p class="desc_info">Logitech G403</p>
                                    <img src="/png/мышка (1).png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="card_info">
                            <div class="frame_info">
                                <div class="text_card_info">
                                    <p>наушники</p>
                                    <p class="desc_info">Corsair HS50</p>
                                    <img src="/png/наушники.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info_tarif">
                    <h1>ТАРИФЫ И ЦЕНЫ</h1>
                    <div class="cards_tarif">
                        <svg width="1126" height="198" viewBox="0 0 1126 198" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1.5" y="1.5" width="149" height="195" rx="3.5" stroke="url(#paint0_linear_17_895)" stroke-width="3" />
                            <rect x="780.5" y="1.5" width="149" height="195" rx="3.5" stroke="url(#paint1_linear_17_895)" stroke-width="3" />
                            <rect x="196.5" y="1.5" width="148" height="195" rx="3.5" stroke="url(#paint2_linear_17_895)" stroke-width="3" />
                            <rect x="975.5" y="1.5" width="149" height="195" rx="3.5" stroke="url(#paint3_linear_17_895)" stroke-width="3" />
                            <rect x="390.5" y="1.5" width="148" height="195" rx="3.5" stroke="url(#paint4_linear_17_895)" stroke-width="3" />
                            <rect x="584.5" y="1.5" width="150" height="195" rx="3.5" stroke="url(#paint5_linear_17_895)" stroke-width="3" />
                            <defs>
                              <linearGradient id="paint0_linear_17_895" x1="-1.13249e-06" y1="99" x2="1122" y2="99" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFDAF1" />
                                <stop offset="1" stop-color="#FF009E" />
                              </linearGradient>
                              <linearGradient id="paint1_linear_17_895" x1="2.00001" y1="99" x2="1122" y2="99" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFDAF1" />
                                <stop offset="1" stop-color="#FF009E" />
                              </linearGradient>
                              <linearGradient id="paint2_linear_17_895" x1="1.99999" y1="99" x2="1123" y2="99" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFDAF1" />
                                <stop offset="1" stop-color="#FF009E" />
                              </linearGradient>
                              <linearGradient id="paint3_linear_17_895" x1="-1.99991" y1="99" x2="1126" y2="99" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFDAF1" />
                                <stop offset="1" stop-color="#FF009E" />
                              </linearGradient>
                              <linearGradient id="paint4_linear_17_895" x1="-0.49998" y1="99" x2="1123" y2="99" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFDAF1" />
                                <stop offset="1" stop-color="#FF009E" />
                              </linearGradient>
                              <linearGradient id="paint5_linear_17_895" x1="0.500047" y1="99" x2="1124.5" y2="99" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFDAF1" />
                                <stop offset="1" stop-color="#FF009E" />
                              </linearGradient>
                            </defs>
                          </svg>
                        <div class="card_tarif">
                            <div class="frame_tarif">
                                <div class="gradient_frame"></div>
                                <div class="text_card_tarif">
                                    <p class="nameees_tarif">Тариф «1 Час»</p>
                                    <p class="desc_tarif">Доступен 24/7</p>
                                    <img src="/png/час.png" alt="">
                                    <div class="name_tarif_price">
                                        <p class="stand_tarif">Стандартный тариф</p>
                                        <p class="tarif_price">140 ₽</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_tarif">
                            <div class="frame_tarif">
                                <div class="gradient_frame"></div>
                                <div class="text_card_tarif">
                                    <p class="nameees_tarif">Тариф «3 Часа»</p>
                                    <p class="desc_tarif">Доступен 24/7</p>
                                    <img src="/png/3 часа.png" alt="">
                                    <div class="name_tarif_price">
                                        <p>Выгода: Час = 130 ₽ </p>
                                        <p class="tarif_price">390 ₽</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_tarif">
                            <div class="frame_tarif">
                                <div class="text_card_tarif">
                                    <p class="nameees_tarif">Тариф «5 Часов»</p>
                                    <p class="desc_tarif">Доступен 24/7</p>
                                    <img src="/png/5 часов.png" alt="">
                                    <div class="name_tarif_price">
                                        <p>Выгода: Час = 100 ₽ </p>
                                        <p class="tarif_price">490 ₽</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_tarif">
                            <div class="frame_tarif">
                                <div class="text_card_tarif">
                                    <p class="nameees_tarif">Тариф «7 Часов»</p>
                                    <p class="desc_tarif">Доступен 24/7</p>
                                    <img src="/png/7 часов.png" alt="">
                                    <div class="name_tarif_price">
                                        <p>Выгода: Час = 85 ₽ </p>
                                        <p class="tarif_price">590 ₽</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_tarif">
                            <div class="frame_tarif">
                                <div class="text_card_tarif">
                                    <p class="nameees_tarif">Тариф «Ночь»</p>
                                    <p class="desc_tarif">23:00 ‒ 10:00</p>
                                    <img src="/png/ночь.png" alt="" style="width: 71px; height: 71px;">
                                    <div class="name_tarif_price">
                                        <p>Выгода: Час = 65 ₽ </p>
                                        <p class="tarif_price">690 ₽</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_tarif">
                            <div class="frame_tarif">
                                <div class="text_card_tarif">
                                    <p class="nameees_tarif">Тариф «День»</p>
                                    <p class="desc_tarif">10:00 ‒ 23:00</p>
                                    <img src="/png/день.png" alt="" style="width: 71px; height: 71px;">
                                    <div class="name_tarif_price">
                                        <p>Выгода: Час = 60 ₽ </p>
                                        <p class="tarif_price">790 ₽</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blocks_discount">
                            <div class="one_discount">
                                <div class="frame_discount">
                                    <div class="dis_text">
                                        <p>С ПОНЕДЕЛЬНИКА ПО СРЕДУ</p>
                                        <h1>СКИДКА 20%</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="two_discount">
                                <div class="frame_discount">
                                    <div class="dis_text">
                                        <p>По утрам с 05:00 до 14:00</p>
                                        <h1>Скидка 40%</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <main>
        <section class="standart_plus">
            <div class="container">
                <div id="standart_zone_plus" class="block_st">
                    <div class="desc_line">
                        <div class="text_block">
                            <h1>ЗОНА <span>СТАНДАРТ+</span></h1>
                            <p>ХАРАКТЕРИСТИКИ</p>
                        </div>
                    </div>
                    
                </div>
                <div class="info_complect">
                    <div class="cards_info">
                        <div class="card_info">
                            <div class="frame_info">
                                <div class="text_card_info">
                                    <p>процессор</p>
                                    <p class="desc_info">Intel Core i5 - 10600K</p>
                                    <img src="/png/проц.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="card_info">
                            <div class="frame_info">
                                <div class="text_card_info">
                                    <p>видеокарта</p>
                                    <p class="desc_info">GeForce RTX 3060 ti</p>
                                    <img src="/png/карта.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="card_info">
                            <div class="frame_info">
                                <div class="text_card_info">
                                    <p>память</p>
                                    <p class="desc_info">DDR4 16GB</p>
                                    <img src="/png/память.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="card_info">
                            <div class="frame_info">
                                <div class="text_card_info">
                                    <p>накопитель</p>
                                    <p class="desc_info">NVMe SSD</p>
                                    <img src="/png/накопитель.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="card_info">
                            <div class="frame_info">
                                <div class="text_card_info">
                                    <p>монитор</p>
                                    <p class="desc_info">32" 144Hz</p>
                                    <img src="/png/монитор.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="card_info">
                            <div class="frame_info">
                                <div class="text_card_info">
                                    <p>клавиатура</p>
                                    <p class="desc_info">HyperX Alloy FPS PRO</p>
                                    <img src="/png/клавиатура.png" alt="" style="width: 107px;height: 107px;margin-top: 14px;">
                                </div>
                            </div>
                        </div>
                        <div class="card_info">
                            <div class="frame_info">
                                <div class="text_card_info">
                                    <p>мышка</p>
                                    <p class="desc_info">SteelSeries Rival 310</p>
                                    <img src="/png/мышка (1).png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="card_info">
                            <div class="frame_info">
                                <div class="text_card_info">
                                    <p>наушники</p>
                                    <p class="desc_info">HyperX Cloud Alpha</p>
                                    <img src="/png/наушники.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info_tarif">
                    <h1>ТАРИФЫ И ЦЕНЫ</h1>
                    <div class="cards_tarif">
                        <svg width="1126" height="198" viewBox="0 0 1126 198" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1.5" y="1.5" width="149" height="195" rx="3.5" stroke="url(#paint0_linear_6983_22)" stroke-width="3" />
                            <rect x="780.5" y="1.5" width="149" height="195" rx="3.5" stroke="url(#paint1_linear_6983_22)" stroke-width="3" />
                            <rect x="196.5" y="1.5" width="148" height="195" rx="3.5" stroke="url(#paint2_linear_6983_22)" stroke-width="3" />
                            <rect x="975.5" y="1.5" width="149" height="195" rx="3.5" stroke="url(#paint3_linear_6983_22)" stroke-width="3" />
                            <rect x="390.5" y="1.5" width="148" height="195" rx="3.5" stroke="url(#paint4_linear_6983_22)" stroke-width="3" />
                            <rect x="584.5" y="1.5" width="150" height="195" rx="3.5" stroke="url(#paint5_linear_6983_22)" stroke-width="3" />
                            <defs>
                              <linearGradient id="paint0_linear_6983_22" x1="1.13249e-06" y1="99" x2="1124" y2="99" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F1FAFF" />
                                <stop offset="1" stop-color="#009FFF" />
                              </linearGradient>
                              <linearGradient id="paint1_linear_6983_22" x1="1.00004" y1="99" x2="1124.5" y2="99" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F1FAFF" />
                                <stop offset="1" stop-color="#009FFF" />
                              </linearGradient>
                              <linearGradient id="paint2_linear_6983_22" x1="2.5" y1="99" x2="1122.5" y2="99" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F1FAFF" />
                                <stop offset="1" stop-color="#009FFF" />
                              </linearGradient>
                              <linearGradient id="paint3_linear_6983_22" x1="2.50003" y1="99" x2="1126" y2="99" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F1FAFF" />
                                <stop offset="1" stop-color="#009FFF" />
                              </linearGradient>
                              <linearGradient id="paint4_linear_6983_22" x1="2.50001" y1="99" x2="1124.5" y2="99" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F1FAFF" />
                                <stop offset="1" stop-color="#009FFF" />
                              </linearGradient>
                              <linearGradient id="paint5_linear_6983_22" x1="1.00002" y1="99" x2="1124.5" y2="99" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F1FAFF" />
                                <stop offset="1" stop-color="#009FFF" />
                              </linearGradient>
                            </defs>
                          </svg>
                        <div class="card_tarif">
                            <div class="frame_tarif">
                                <div class="gradient_frame"></div>
                                <div class="text_card_tarif">
                                    <p class="nameees_tarif">Тариф «1 Час»</p>
                                    <p class="desc_tarif">Доступен 24/7</p>
                                    <img src="/png/час.png" alt="">
                                    <div class="name_tarif_price">
                                        <p class="stand_tarif">Стандартный тариф</p>
                                        <p class="tarif_price">240 ₽</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_tarif">
                            <div class="frame_tarif">
                                <div class="gradient_frame"></div>
                                <div class="text_card_tarif">
                                    <p class="nameees_tarif">Тариф «3 Часа»</p>
                                    <p class="desc_tarif">Доступен 24/7</p>
                                    <img src="/png/3 часа.png" alt="">
                                    <div class="name_tarif_price">
                                        <p>Выгода: Час = 165 ₽ </p>
                                        <p class="tarif_price">490 ₽</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_tarif">
                            <div class="frame_tarif">
                                <div class="text_card_tarif">
                                    <p class="nameees_tarif">Тариф «5 Часов»</p>
                                    <p class="desc_tarif">Доступен 24/7</p>
                                    <img src="/png/5 часов.png" alt="">
                                    <div class="name_tarif_price">
                                        <p>Выгода: Час = 140 ₽ </p>
                                        <p class="tarif_price">690 ₽</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_tarif">
                            <div class="frame_tarif">
                                <div class="text_card_tarif">
                                    <p class="nameees_tarif">Тариф «7 Часов»</p>
                                    <p class="desc_tarif">Доступен 24/7</p>
                                    <img src="/png/7 часов.png" alt="">
                                    <div class="name_tarif_price">
                                        <p>Выгода: Час = 115 ₽ </p>
                                        <p class="tarif_price">790 ₽</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_tarif">
                            <div class="frame_tarif">
                                <div class="text_card_tarif">
                                    <p class="nameees_tarif">Тариф «Ночь»</p>
                                    <p class="desc_tarif">23:00 ‒ 10:00</p>
                                    <img src="/png/ночь.png" alt="" style="width: 71px; height: 71px;">
                                    <div class="name_tarif_price">
                                        <p>Выгода: Час = 80 ₽ </p>
                                        <p class="tarif_price">890 ₽</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card_tarif">
                            <div class="frame_tarif">
                                <div class="text_card_tarif">
                                    <p class="nameees_tarif">Тариф «День»</p>
                                    <p class="desc_tarif">10:00 ‒ 23:00</p>
                                    <img src="/png/день.png" alt="" style="width: 71px; height: 71px;">
                                    <div class="name_tarif_price">
                                        <p>Выгода: Час = 75 ₽  </p>
                                        <p class="tarif_price">950 ₽</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blocks_discount">
                            <div class="one_discount">
                                <div class="frame_discount">
                                    <div class="dis_text">
                                        <p>С ПОНЕДЕЛЬНИКА ПО СРЕДУ</p>
                                        <h1>СКИДКА 20%</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="two_discount">
                                <div class="frame_discount">
                                    <div class="dis_text">
                                        <p>По утрам с 05:00 до 14:00</p>
                                        <h1>Скидка 40%</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="sec_rezerv">
            <div id="ps5_zone" class="rezerv_container">
                <div class="rezerv_st">
                    <div class="rezerv_line">
                        <div class="rezerv_block">
                            <h1>ЗОНА <span>PS5</span></h1>
                            <p>ТАРИФЫ И ЦЕНЫ</p>
                        </div>
                    </div>
                </div>
                <div class="cards_tarif">
                    <svg width="540" height="198" viewBox="0 0 540 198" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1.5" y="1.5" width="149" height="195" rx="3.5" stroke="url(#paint0_linear_6985_23)" stroke-width="3" />
                        <rect x="196.5" y="1.5" width="148" height="195" rx="3.5" stroke="url(#paint1_linear_6985_23)" stroke-width="3" />
                        <rect x="390.5" y="1.5" width="148" height="195" rx="3.5" stroke="url(#paint2_linear_6985_23)" stroke-width="3" />
                        <defs>
                          <linearGradient id="paint0_linear_6985_23" x1="1.13249e-06" y1="99" x2="542" y2="99" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#E1E4FF" stop-opacity="0.05" />
                            <stop offset="1" stop-color="#001AFF" />
                          </linearGradient>
                          <linearGradient id="paint1_linear_6985_23" x1="2.5" y1="99" x2="539" y2="99" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#E1E4FF" stop-opacity="0" />
                            <stop offset="1" stop-color="#001AFF" />
                          </linearGradient>
                          <linearGradient id="paint2_linear_6985_23" x1="2.50002" y1="99" x2="540" y2="99" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F1FAFF" stop-opacity="0.05" />
                            <stop offset="1" stop-color="#2636C0" />
                          </linearGradient>
                        </defs>
                      </svg>
                    <div class="card_tarif">
                        <div class="frame_tarif">
                            <div class="gradient_frame"></div>
                            <div class="text_card_tarif">
                                <p class="nameees_tarif">Тариф «1 Час»</p>
                                <p class="desc_tarif">Доступен 24/7</p>
                                <img src="/png/час.png" alt="">
                                <div class="name_tarif_price">
                                    <p class="stand_tarif">Стандартный тариф</p>
                                    <p class="tarif_price">240 ₽</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_tarif">
                        <div class="frame_tarif">
                            <div class="gradient_frame"></div>
                            <div class="text_card_tarif">
                                <p class="nameees_tarif">Тариф «3 Часа»</p>
                                <p class="desc_tarif">Доступен 24/7</p>
                                <img src="/png/3 часа.png" alt="">
                                <div class="name_tarif_price">
                                    <p style="color: rgba(168, 222, 255, 0.5);">Выгода: Час = 165 ₽ </p>
                                    <p class="tarif_price">490 ₽</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_tarif">
                        <div class="frame_tarif">
                            <div class="text_card_tarif">
                                <p class="nameees_tarif">Тариф «5 Часов»</p>
                                <p class="desc_tarif">Доступен 24/7</p>
                                <img src="/png/5 часов.png" alt="">
                                <div class="name_tarif_price">
                                    <p style="color: rgba(126, 207, 255, 0.6);">Выгода: Час = 140 ₽ </p>
                                    <p class="tarif_price">690 ₽</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                    <input class="inp_tel" name="phone" type="text" placeholder="Номер телефона" required>
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
        </section>
    </main>
    <footer>
        <section class="map_club">
            <div id="" class="map_container">
                <svg width="1320" height="618" viewBox="0 0 1320 618" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="1205.31" y="259.76" width="114.18" height="57.0901" rx="10" fill="#202020" />
                    <rect x="1026.91" y="259.76" width="114.18" height="57.0901" rx="10" fill="#202020" />
                    <rect x="903.494" y="388.212" width="416.044" height="57.0901" rx="10" fill="#202020" />
                    <rect x="813.013" y="260" width="148" height="57" rx="10" fill="#202020" />
                    <rect y="260" width="463" height="57" rx="10" fill="#202020" />
                    <rect x="546.005" y="260" width="184" height="57" rx="10" fill="#202020" />
                    <rect x="57.0898" width="171.27" height="57.0901" rx="10" transform="rotate(90 57.0898 0)" fill="#202020" />
                    <rect x="463.09" width="171.27" height="57.0901" rx="10" transform="rotate(90 463.09 0)" fill="#202020" />
                    <rect x="1319.49" width="445.302" height="57.09" rx="10" transform="rotate(90 1319.49 0)" fill="#202020" />
                    <rect x="57.0898" y="259.76" width="358.24" height="57.09" rx="10" transform="rotate(90 57.0898 259.76)" fill="#202020" />
                    <rect x="960.584" y="259.76" width="356.813" height="57.09" rx="10" transform="rotate(90 960.584 259.76)" fill="#202020" />
                    <rect x="1141.09" y="259.76" width="185.543" height="57.0901" rx="10" transform="rotate(90 1141.09 259.76)" fill="#202020" />
                    <rect width="1319.49" height="57.0901" rx="10" fill="#202020" />
                    <rect y="559.483" width="960.54" height="57.0901" rx="10" fill="#202020" />
                    <rect x="251.272" width="171.27" height="14.2725" rx="7.13625" transform="rotate(90 251.272 0)" fill="#202020" />
                    <rect x="644.489" y="0.000488281" width="171.27" height="14.2725" rx="7.13625" transform="rotate(90 644.489 0.000488281)" fill="#202020" />
                    <rect x="827.214" y="0.000488281" width="171.27" height="14.2725" rx="7.13625" transform="rotate(90 827.214 0.000488281)" fill="#202020" />
                    <rect x="1009.92" y="0.000244141" width="171.27" height="14.2725" rx="7.13625" transform="rotate(90 1009.92 0.000244141)" fill="#202020" />
                    <rect x="452.438" y="445.302" width="271.178" height="14.2725" rx="7.13625" transform="rotate(-180 452.438 445.302)" fill="#202020" />
                    <rect x="778.609" y="445.302" width="271.178" height="14.2725" rx="7.13625" transform="rotate(-180 778.609 445.302)" fill="#202020" />
                  </svg>
                <div class="map_title">
                    <p>КАРТА КЛУБА</p>
                </div>
                <div class="map_st">
                    <div class="location">
                        <div class="adm_wc">
                            <div class="adm">
                                ADMIN
                            </div>
                            <div class="wc">
                                WC
                            </div>
                        </div>
                        <div class="map_stplus">
                            <div class="top-row">2</div>
                            <div class="top-row">3</div>
                            <div class="top-row">6</div>
                            <div class="top-row">7</div>
                            <div class="top-row">10</div>
                            <div class="top-row">11</div>
                            
                            <div class="bottom-row">1</div>
                            <div class="bottom-row">4</div>
                            <div class="bottom-row">5</div>
                            <div class="bottom-row">8</div>
                            <div class="bottom-row">9</div>
                            <div class="bottom-row">12</div>
                        </div>                        
                        <div class="right_ps">PS</div>
                    </div>
                </div>
                <div class="map_photo">
                    <div class="arr_ph">
                        <img src="/png/Arrow 3.png" alt="">
                        <a href=""><div class="back"><div class="overlay"><img src="/img/админка.jpg" alt=""></div></div><img src="/png/photo.png" alt=""></a>
                    </div>
                    <a href=""><div class="back"><div class="overlay" ><img src="/img/38.jpg" alt=""></div></div><img src="/png/photo.png" alt="" style="position: absolute;top: 94%; left: 35.4%;"></a>
                    
                    <div class="one_line">
                        <a href=""><div class="back"><div class="overlay"><img src="/img/5 и 8.jpg" alt=""></div></div><img src="/png/photo.png" alt="" style="position: absolute;top: 80%;left: 47.5%;"></a>
                        <a href=""><div class="back"><div class="overlay"><img src="/img/ps.jpg" alt=""></div></div><img src="/png/photo.png" alt=""></a>
                    </div>
                </div>
                <div class="map_under">
                    <div class="left_column">
                        <div>32</div>
                        <div>31</div>
                        <div>30</div>
                        <div>29</div>
                    </div>
                    <div class="map_left_row_columns">
                        <div class="block_map">
                            <div>33</div>
                            <div>34</div>
                            <div>35</div>
                            <div>36</div>
                            <div>37</div>
                        </div>
                        <div class="block_map">
                            <div>38</div>
                            <div>39</div>
                            <div>40</div>
                            <div>41</div>
                            <div>42</div>
                        </div>
                        <div class="block_map">
                            <div>28</div>
                            <div>27</div>
                            <div>26</div>
                            <div>25</div>
                            <div>24</div>
                        </div>
                        <div class="block_map">
                            <div>23</div>
                            <div>22</div>
                            <div>21</div>
                            <div>20</div>
                            <div>19</div>
                        </div>
                    </div>
                    <div class="left_column">
                        <div>15</div>
                        <div>16</div>
                        <div>17</div>
                        <div>18</div>
                    </div>
                    <div class="map_block_right">
                        <div class="right_column">
                            <div>14</div>
                            <div>13</div>
                        </div>
                        <div class="sign_row">
                            <div class="color-block-container">
                              <div class="color-block purple"></div>
                              <p>Стандарт</p>
                            </div>
                            <div class="color-block-container">
                              <div class="color-block blue"></div>
                              <p>Стандарт+</p>
                            </div>
                          </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    <script src="/baumanskaya/arr.js"></script>
</body>
</html>