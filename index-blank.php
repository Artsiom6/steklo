<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><? echo $metatitle; ?></title>
    <meta name="description" content="<? echo $metadescription; ?>">
    <meta name="keywords" content="<? echo $metakeywords; ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<?
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";;
$urinopars = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH)
?>

    <link rel="canonical" href="https://<?= $_SERVER['SERVER_NAME'];?><?php if(!empty($_SERVER['PHP_SELF']) AND $_SERVER['PHP_SELF'] !== 'index' AND $_SERVER['PHP_SELF'] !== 'index.php'){echo str_replace(".php","",$_SERVER['PHP_SELF']);}?>">

    <link rel="alternate" hreflang="ru-ru" href="<?= $protocol.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>">

    <link rel="shortcut icon" type="image/png" href="/favicon.png">
<?
// Function for basic field validation (present and neither empty nor only white space)
function IsNullOrEmptyString($question){
  return (!isset($question) || trim($question)==='');
}

$pagenum = intval($_GET['p']);
if(IsNullOrEmptyString($pagenum)) $pagenum = 0;
if($pagenum > 0) { ?>
    <meta name="robots" content="noindex,follow">
<? } else { ?>
    <meta name="robots" content="index,follow">
<? }

if($pagenum < $pagemax) {
    $nextpage = $pagenum + 1; ?>
    <link rel="next" href="<? echo $protocol.$_SERVER['HTTP_HOST'].$urinopars.'?p='.$nextpage ?>">
<? }
if($pagenum > 0) {
    $prevpage = $pagenum - 1; ?>
    <link rel="prev" href="<? echo $protocol.$_SERVER['HTTP_HOST'].$urinopars.'?p='.$prevpage ?>">
<? }
?>


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
                <div id="leftmenu" class="col-md-3">
                    <!--  menu -->
                    <div  class="category-wrap" id="menu">
                        <? include 'addition/menu.php'; ?>
                    </div>  
                    <!--  menu end -->
                    <!-- mobile menu -->
                    <div  class="category-wrap" id="mobile-menu">
                        <? include 'addition/menu.php'; ?>
                    </div>  
                    <!-- mobile menu end -->
                    <?/*<!-- calculator -->
                    <a href="/calculator">
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

                    <!-- Требуемый раздел -->
                    <? include $needarticleurl; ?>
                    <!-- Требуемый раздел end -->


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
</div>

<!-- Всплывающие окна -->
<? include 'addition/modal.php'; ?>
<!-- Всплывающие окна end -->

<!-- Подключенные JS скрипты -->
<? include 'addition/js.php'; ?>
<!-- Подключенные JS скрипты end -->

<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-use-bootstrap-modal="false">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <div class="h3 title"></div>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <div class="h4 modal-title"></div>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Предыдущий
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Следующий
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>