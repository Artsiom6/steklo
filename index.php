<?php

if ($_GET['id'] != '') {
    header("HTTP/1.1 301 Moved Permanently");

    switch ($_GET['id']) {
        case 50:
            header("Location: https://steklofest.by/steklo");
            break;
        case 49:
            header("Location: https://steklofest.by/obrabotka");
            break;
        case 47:
            header("Location: https://steklofest.by/matirovanie");
            break;
        case 52:
            header("Location: https://steklofest.by/catalog");
            break;
        case 48:
            header("Location: https://steklofest.by/tables");
            break;
        case 53:
            header("Location: https://steklofest.by/calculator");
            break;
        case 51:
            header("Location: https://steklofest.by/contacts");
            break;
        default:
            header("Location: https://steklofest.by");
    }
    exit();


}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Все виды обработки стекла и зеркал под заказ - компания СтеклоФэст</title>
    <meta name="description" content="Все виды обработки✅, а также изделия из стекла на заказ в Минске и Минской области✅. Цены и фото на сайте.
">
    <meta name="keywords" content="обработка стекла резка сверление фацет СтеклоФэст">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>

    <link rel="alternate" hreflang="ru-ru" href="<?= 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <link rel="shortcut icon" type="image/png" href="/favicon.png">

    <link rel="canonical"
          href="https://<?= $_SERVER['SERVER_NAME']; ?><?php if (!empty($_SERVER['PHP_SELF']) AND $_SERVER['PHP_SELF'] !== 'index' AND $_SERVER['PHP_SELF'] !== 'index.php') {
              echo str_replace(".php", "", $_SERVER['PHP_SELF']);
          } ?>">

    <meta name="wot-verification" content="5143dd13bb941814f290"/>

    <style>

        /* pt-sans-regular - latin_cyrillic */
        @font-face {
            font-display: swap;
            font-family: 'PT Sans';
            font-style: normal;
            font-weight: 400;
            src: local('PT Sans'), local('PTSans-Regular'),
            url('../fonts/pt-sans-v10-latin_cyrillic-regular.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
            url('../fonts/pt-sans-v10-latin_cyrillic-regular.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
        }
        /* pt-sans-700 - latin_cyrillic */
        @font-face {
            font-display: swap;
            font-family: 'PT Sans';
            font-style: normal;
            font-weight: 700;
            src: local('PT Sans Bold'), local('PTSans-Bold'),
            url('../fonts/pt-sans-v10-latin_cyrillic-700.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
            url('../fonts/pt-sans-v10-latin_cyrillic-700.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
        }


        body {
            font-family: "PT Sans", sans-serif;
            background: #fff url('../images/gplaypattern.png') repeat;
            overflow-x: hidden;
        }

        /*========Header styles=========*/
        .wrapper {
            max-width: 1170px;
            margin: 60px auto 30px;
            background: #fff;
            -webkit-box-shadow: 0px 0px 10px 0px rgba(50, 50, 50, 0.6);
            -moz-box-shadow: 0px 0px 10px 0px rgba(50, 50, 50, 0.6);
            box-shadow: 0px 0px 10px 0px rgba(50, 50, 50, 0.6);
            position: relative;
        }

        .makecall,
        .makecalc {
            height: 45px;
            padding: 10px 15px;
            color: #fff;
            position: absolute;
            top: -45px;
            font-size: 17px;
            font-weight: bold;
            border-right: 1px solid #fff;
            border-top: 1px solid #fff;
        }

        .makecall {
            width: 198px;
            right: 16px;
            background: #3c446e;
            border-radius: 0 14px 0 0;
            transition: all .3s;
        }

        .makecalc {
            border-left: 1px solid #fff;
            right: 214px;
            background: #f9561f;
            border-radius: 14px 0 0 0;
            transition: all .3s;
        }

        .makecall a,
        .makecalc a,
        .makecall a:hover,
        .makecalc a:hover,
        .makecall a:active,
        .makecalc a:active,
        .makecall a:target,
        .makecalc a:target,
        .makecall a:visited,
        .makecalc a:visited,
        .makecall a:focus,
        .makecalc a:focus,
        .makecall:focus a,
        .makecalc:focus a {
            color: #fff !important;
            text-decoration: none;
        }
        .makecall,
        .makecalc,
        .makecall:hover,
        .makecalc:hover,
        .makecall:active,
        .makecalc:active,
        .makecall:target,
        .makecalc:target,
        .makecall:visited,
        .makecalc:visited,
        .makecall:focus,
        .makecalc:focus,
        .makecall:focus,
        .makecalc:focus {
            color: #fff !important;
            text-decoration: none;
        }

        .makecall:hover,
        .makecalc:hover,
        .makecall:active,
        .makecalc:active,
        .makecall:target,
        .makecalc:target,
        .makecall:focus,
        .makecalc:focus {
            color: #fff;
            background: #dc4d1d;
        }

        .makecall i {
            padding-right: 6px;
        }
        .page-header {
            padding: 0 0 5px;
            margin: 10px 0;
            border-bottom: none;
        }

        #mainlogo img {
            float: left;
            margin: 0 10px 10px 0;
        }

        .contacts {
            text-align: right;
        }
        .contacts-box {
            margin-bottom: 30px;
        }
        .contacts a {
            color: #222;
        }

        #mainlogo {
            margin: 20px 0;
        }

        #mainlogo .h2 {
            padding: 0;
            margin: 0;
        }

        #mainlogo .companyname {
            font-family: 'PT Sans', sans-serif;
            font-weight: 700;
            color: #F15B20;
            font-size: 42px;
            line-height: 38px;
        }

        #mainlogo .companyname span {
            color: #606791;
        }

        #mainlogo .companytitle {
            font-family: 'PT Sans', sans-serif;
            font-weight: 700;
            color: #777777;
            font-size: 16px;
            text-transform: uppercase;
        }

        #mainlogo .companydescr {
            font-family: 'PT Sans', sans-serif;
            font-size: 13px;
            color: #444;
        }

        /*=======Slick slider======*/

        .slick {
            max-height: 500px;
            overflow: hidden;
            margin-bottom: 40px;
            margin-left: -15px;
            margin-top: -15px;
            margin-right: -15px;
        }
        .slick-box {
            position: relative;
            max-height: 500px;
            overflow: hidden;
        }
        .slick-box img {
            display: block;
            width: 100%;
            height: auto;
        }
        .slick-caption {
            position: absolute;
            bottom: 10%;
            /* left: 50px; */
            padding: 20px 40px;
            color: #fff;
            background-color: rgba(0,0,0,.6);
            width: 100%;
        }
        .slick-caption h3{
            font-size: 40px;
            color: #fff;
            margin-bottom: 0;
        }
        img.slick-prev {
            left: 30px;
        }
        img.slick-next {
            right: 30px;
        }
        img.slick-prev, img.slick-next {
            z-index: 3;
            top: 40%;
            width: 40px;
            height: 40px;
            opacity: 0.5;
            transition: .3s all;
        }
        img.slick-prev:before, img.slick-next:before {
            font-size: 40px;
        }
        .slick img.slick-prev:hover {
            opacity: 1;
        }
        .slick img.slick-next:hover {
            opacity: 1;
        }
        @media (max-width: 992px) {
            .wrapper {
                margin: 0 auto !important;
            }
        }

        @media (max-width: 768px){
            .slick {
                height: 250px;
                overflow: hidden;
            }
            .slick-box img {
                height: 250px;
                object-fit: cover;
            }
            .slick-caption {
                font-size: 26px;
            }
        }

    </style>

    <?/*<link href="/css/steklofest.css" rel="stylesheet">*/?>

    <!-- css -->
    <? include 'addition/css.php'; ?>
    <!-- css end -->

</head>
<body>


<div id="page-wrapper">

    <div class="wrapper">

        <!-- header -->
        <? include 'addition/header.php'; ?>
        <!-- header end -->


        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- slick-carousel -->
                    <!-- Wrapper for slides -->
                    <div class="slick">
                        <div class="slick-box">
                            <img src="images/slides/slide07.jpg"
                                 srcset="images/slides/slide07-1140.jpg 1140w,
                                     images/slides/slide07-700.jpg 700w,
                                     images/slides/slide07-480.jpg 480w"
                                 sizes="(max-width: 480px) 480px,
                                    (max-width: 700px) 700px,
                                      1140px"
                                 alt="Кабины для душа">
                            <div class="slick-caption">
                                <h3>Душевые кабины</h3>
                            </div>
                        </div>
                        <div class="slick-box">
                            <img src="images/slides/slide08.jpg"
                                 srcset="images/slides/slide08-1140.jpg 1140w,
                                     images/slides/slide08-700.jpg 700w,
                                     images/slides/slide08-480.jpg 480w"
                                 sizes="(max-width: 480px) 480px,
                                    (max-width: 700px) 700px,
                                      1140px"
                                 alt="Ограждения для лестниц из стекла">
                            <div class="slick-caption">
                                <h3>Ограждения лестниц из стекла</h3>
                            </div>
                        </div>
                        <div class="slick-box">
                            <img src="images/slides/slide05.jpg"
                                 alt="Зеркала для интерьера">
                            <div class="slick-caption">
                                <h3>Интерьерные зеркала</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="leftmenu" class="col-md-3 hidden-xs hidden-sm">
                    <!--  menu -->
                    <div class="category-wrap" id="menu">
                        <? include 'addition/menu.php'; ?>
                    </div>
                    <!--  menu end -->
                    <!-- mobile menu -->
                    <div class="category-wrap" id="mobile-menu">
                        <? include 'addition/menu.php'; ?>
                    </div>
                    <!-- mobile menu end -->
                    <!-- calculator -->
                    <?/*<a href="/calculator">
                        <div id="onlinecalculator">
                            <div class="h3">Онлайн калькулятор</div>
                            <img src="/images/calculator.png" alt="Онлайн калькулятор расчет" class="img-responsive">
                            <p>
                                Расчет цены обработки стекла и зеркал
                            </p>
                        </div>
                    </a>*/?>
                </div>


                <div id="mainpage" class="col-md-9 col-sm-12 col-xs-12">

                    <?php
                    /*
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                        </ol>

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <img src="images/slides/slide03.jpg" alt="...">
                                                <div class="carousel-caption">
                                                    <h3>Изготовление интерьера из стелка</h3>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img src="images/slides/slide02.jpg" alt="...">
                                                <div class="carousel-caption">
                                                    <h3>Обработка стекла</h3>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img src="images/slides/slide01.jpg" alt="...">
                                                <div class="carousel-caption">
                                                    <h3>Резка стекла</h3>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Controls -->
                                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </a>
                                    </div> <!-- Carousel -->
                    */
                    ?>


                    <div class="maintext">

                        <p><strong>Компания Стекло Фэст</strong> - динамично развивающееся предприятие.
                        <p>

                        <p>Наше предприятие имеет современный парк высокотехнологичного оборудования, которое позволяет
                            осуществлять широкий спектр услуг по переработке стекла при конкурентоспособных ценах.</p>

                        <p>Обратившись к нам, Вы получите качественное, быстрое и удобное обслуживание.</p>

                        <p><strong>Качественно и быстро</strong> – Ваши заказы изготавливаются квалифицированными
                            специалистами
                            на высокотехнологичном оборудовании, позволяющем производить любую обработку листового
                            стекла и
                            зеркал в соответствии с мировыми стандартами.</p>


                    </div>


                    <!-- Виды обработки начало -->
                    <div class="obrabotka">
                        <a href="/izdelija"><h2>Изделия из стекла</h2></a>

                        <a href="/mozajka">
                            <div class="obrtype">
                                <h3>Зеркальное панно</h3>
                                <div class="image-block">
                                    <img src="images/placeholder.jpg" data-src="/img/content/pano-opt.jpg"
                                         class="lazy img-responsive" alt="Зеркальное панно"><br>
                                </div>
                            </div>
                        </a>
                        <a href="/dushevye-kabiny">
                            <div class="obrtype">
                                <h3>Душевые кабины</h3>
                                <div class="image-block">
                                    <img src="images/placeholder.jpg" data-src="/img/content/dushevye-kabiny-opt.jpg"
                                         class="lazy img-responsive" alt="Душевые кабины"><br>
                                </div>
                            </div>
                        </a>
                        <a href="/zerkala-pod-zakaz">
                            <div class="obrtype">
                                <h3>Зеркала под заказ</h3>
                                <div class="image-block">
                                    <img src="images/placeholder.jpg" data-src="/img/content/zerkala-opt.jpg"
                                         class="lazy img-responsive" alt="Зеркала под заказ"><br>
                                </div>
                            </div>
                        </a>
                        <a href="/peregorodki">
                            <div class="obrtype">
                                <h3>Стеклянные перегородки</h3>
                                <div class="image-block">
                                    <img src="images/placeholder.jpg"
                                         data-src="/img/content/steklyannye-peregorodki-opt.jpg"
                                         class="lazy img-responsive" alt="Стеклянные перегородки"><br>
                                </div>
                            </div>
                        </a>
                        <a href="/ograzhdenija-lestnic">
                            <div class="obrtype">
                                <h3>Ограждения лестниц</h3>
                                <div class="image-block">
                                    <img src="images/placeholder.jpg" data-src="/img/content/peregorodki-opt.jpg"
                                         class="lazy img-responsive" alt="Ограждения лестниц"><br>
                                </div>
                            </div>
                        </a>
                        <a href="/tables">
                            <div class="obrtype">
                                <h3>Стеклянные столы</h3>
                                <div class="image-block">
                                    <img src="images/placeholder.jpg" data-src="/img/content/stoly-opt.jpg"
                                         class="lazy img-responsive" alt="Стеклянные столы"><br>
                                </div>
                            </div>
                        </a>

                    </div>


                    <div class="obrabotka">
                        <a href="/uslugi"><h2>Выполняем Все виды обработки стекла</h2></a>

                        <a href="/rezka">
                            <div class="obrtype">
                                <h3>Резка стекла<br>и зеркала</h3>
                                <div class="image-block">
                                    <img src="images/placeholder.jpg" data-src="/images/obrabotka/rezka.jpg"
                                         class="lazy img-responsive" alt="Резка стекла и зеркала"><br>
                                </div>
                            </div>
                        </a>

                        <a href="/obrabotka">
                            <div class="obrtype">
                                <h3>Шлифовка, полировка<br>кромки стекла</h3>
                                <div class="image-block">
                                    <img src="images/placeholder.jpg" data-src="/images/obrabotka/kromka.jpg"
                                         class="lazy img-responsive" alt="Резка стекла и зеркала"><br>
                                </div>
                            </div>
                        </a>

                        <a href="/sverlenie">
                            <div class="obrtype">
                                <h3>Сверление отверстий</h3>
                                <div class="image-block">
                                    <img src="images/placeholder.jpg" data-src="/images/obrabotka/sverlenie.jpg"
                                         class="lazy img-responsive" alt="Резка стекла и зеркала"><br>
                                </div>
                            </div>
                        </a>

                        <a href="/facet">
                            <div class="obrtype">
                                <h3>Фацет</h3>
                                <div class="image-block">
                                    <img src="images/placeholder.jpg" data-src="/images/obrabotka/facet.jpg"
                                         class="lazy img-responsive" alt="Резка стекла и зеркала"><br>
                                </div>
                            </div>
                        </a>

                        <a href="/matirovanie">
                            <div class="obrtype">
                                <h3>Матирование стекла</h3>
                                <div class="image-block">
                                    <img src="images/placeholder.jpg" data-src="/images/obrabotka/matirovanie.jpg"
                                         class="lazy img-responsive" alt="Резка стекла и зеркала"><br>
                                </div>
                            </div>
                        </a>

                        <a href="/zakalka">
                            <div class="obrtype">
                                <h3>Закалка</h3>
                                <div class="image-block">
                                    <img src="images/placeholder.jpg" data-src="/images/obrabotka/zakalka.jpg"
                                         class="lazy img-responsive" alt="Резка стекла и зеркала"><br>
                                </div>
                            </div>
                        </a>

                    </div>
                    <!-- Виды обработки конец -->


                    <!-- Виды материалов начало -->
                    <div class="materialsteklo">
                        <h2>Широкий ассортимент стекла и зеркал</h2>

                        <div class="mattype">
                            <h3>Прозрачное стекло</h3>
                            <img src="images/placeholder.jpg" class="lazy" data-src="/images/materials/steklo.jpg"
                                 alt="Прозрачное стекло"><br>
                            <span class="description">Толщина 4, 5, 6, 8, 10, 12, 15 мм</span>
                        </div>

                        <div class="mattype">
                            <h3>Тонированное стекло</h3>
                            <img src="images/placeholder.jpg" class="lazy" data-src="/images/materials/tonst.jpg"
                                 alt="Тоннированное стекло"><br>
                            <span class="description">Толщина 4, 6, 8, 10 мм</span>
                        </div>

                        <div class="mattype">
                            <h3>Зеркала</h3>
                            <img src="images/placeholder.jpg" class="lazy" data-src="/images/materials/zerkalo.jpg"
                                 alt="Зеркала"><br>
                            <span class="description">Толщина 4 мм</span>
                        </div>

                        <div class="mattype">
                            <h3>Лакомат</h3>
                            <img src="images/placeholder.jpg" class="lazy" data-src="/images/materials/lakomat.jpg"
                                 alt="Лакомат"><br>
                            <span class="description">Толщина 4 мм</span>
                        </div>

                        <div class="mattype">
                            <h3>Лакобель</h3>
                            <img src="images/placeholder.jpg" class="lazy" data-src="/images/materials/lakobel.jpg"
                                 alt="Лакобель"><br>
                            <span class="description">Толщина 4 мм</span>
                        </div>

                        <div class="mattype">
                            <h3>Сатин (Мателюкс)</h3>
                            <img src="images/placeholder.jpg" class="lazy" data-src="/images/materials/satin.jpg"
                                 alt="Сатин (Мателюкс)"><br>
                            <span class="description">Толщина 4, 5, 6, 8 мм</span>
                        </div>

                    </div>
                    <!-- Виды материалов конец -->

                    <div class="maintext">

                        <p><strong>Огромный опыт</strong> наших специалистов дают бесконечные возможности для воплощения
                            Ваших
                            фантазий в стекле.

                            Нашим клиентам мы гарантируем индивидуальный подход, компетентное и творческое решение
                            поставленных
                            задач, безупречное <strong>качество</strong> и <strong>высокий уровень сервиса</strong>.</p>

                        <p>Варианты сотрудничества:</p>
                        <ul>
                            <li>изготовление индивидуальных заказов с разработкой эскизов и проектов;</li>
                            <li>изготовление заказов по эскизам и проектам Заказчика.</li>
                        </ul>


                    </div>

                    <!-- Нам доверяют -->
                    <div class="doverie">
                        <h2>Нам доверяют</h2>

                        <img src="images/doverie.jpg" alt="клиенты СтеклоФэст" class="img-responsive">

                    </div>
                    <!-- Нам доверяют -->
                    <div class="maintext">
                        <p>Уверены, что сотрудничество с нами поможет Вам в осуществлении самых смелых проектов и даст
                            дополнительные возможности для успешного развития Вашего бизнеса.</p>
                    </div>


                </div>
            </div>

        </div>


        <!-- Остались вопросы -->
        <? include 'addition/questionblock.php'; ?>
        <!-- Остались вопросы end -->

        <!-- footer -->
        <? include 'addition/footer.php'; ?>
        <!-- footer end -->
    </div>


    <!-- Всплывающие окна -->
    <? include 'addition/modal.php'; ?>
    <!-- Всплывающие окна end -->


    <!-- Подключенные JS скрипты -->
    <? include 'addition/js.php'; ?>
    <!-- Подключенные JS скрипты end -->

</div>

<script>
    $(document).ready(function () {
        $('.slick').slick({
            prevArrow: '<img class="slick-prev" src="libs/slick/prev.svg">',
            nextArrow: '<img class="slick-next" src="libs/slick/next.svg">',
            dots: false,
            autoplay: true,
            infinite: true,
            speed: 800
        });
    });
</script>


</body>
</html>