<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';
$id = $_GET['id'] ?? 1;
$menuID = $dataMenu->getOneMenuID($id);
?>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LoTe</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.png">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/themify-icons.css">
    <link rel="stylesheet" href="/css/nice-select.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/slicknav.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-5 col-lg-5">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a class="active" href="">Главная</a></li>
                                    <li><a href="#menu">Меню</a></li>
                                    <li><a href="#info">О нас</a></li>
                                    <li><a href="#contact">Контакты</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <a href="">
                                <img class="logo" src="/img/LoTe.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 d-none d-lg-block">
                        <div class="book_room">
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                </ul>
                                <ul>

                                </ul>
                            </div>
                            <div class="book_btn d-none d-xl-block">
                                <a class="#" href="#">+7 (908) 050-79-12</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<br><br>
<div class="best_burgers_area" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center mb-80">
                    <span>Пицца меню</span>
                    <h3>Лучшие пиццы</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="single_delicious ">
                <div>
                    <?php if ($menuID): ?>
                        <img src="/img/<?= $menuID->foto ?>" alt="" width="320px" >

                </div><br>
                <div class="info">
                    <h3><?=$menuID->name?></h3>
                    <p><?=$menuID->description?>
                        <?=$menuID->weight?> гр.</p>
                    <span><?=$menuID->price?> руб.</span>
                    <a class="order" href="">Добавить</a>
                    <?php endif ?>
                </div>
            </div>
        </div><br><br>
        <a class="btnback" href="/index.php"><span class="link-content">Назад</span></a>
    </div>
</div>
<footer class="footer">
    <div class="footer_top" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget text-center ">
                        <h3 class="footer_title pos_margin">
                            Москва
                        </h3>
                        <p>Университетский пр., 6, Москва, 119333 <br>
                            <a href="#">info@burger.com</a></p>
                        <a class="number" href="#">+7 (908) 554-57-01</a>

                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget text-center ">
                        <h3 class="footer_title pos_margin">
                            Новосибирск
                        </h3>
                        <p>ул. Немировича-Данченко, 141-17, Новосибирск, Новосибирская обл., 630064 <br>
                            <a href="#">info@burger.com</a></p>
                        <a class="number" href="#">+7 (910) 033-53-66</a>

                    </div>
                </div>
                <div class="col-xl-4 col-md-12 col-lg-4">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Будь на связи
                        </h3>
                        <form action="#" class="newsletter_form">
                            <input type="text" placeholder="Введите email">
                            <button type="submit">Зарегистрироваться</button>
                        </form>
                        <p class="newsletter_text">Оставайтесь на связи с нами, чтобы получить эксклюзивное предложение</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="socail_links text-center">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="ti-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-twitter-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>