<?
$filename = $_SERVER['PHP_SELF'];
$needarticleurl = "addition/articles$filename" ;
$numpage = $_GET['p']+1 ;
$pagemax = 29;

$metatitle = "Каталог образцов рисунков для матирования стекла, рисунки на стекле пескоструй  (стр. $numpage) - СтеклоФэст" ;
$metadescription = 'Каталог фотографий рисунков для пескоструйной обработки стекла ✔в Минске и Минской области☑. Цены и фото на сайте👈';
$metakeywords = 'каталог рисунков нанесение на стекло пескоструй пескоструйная обработка';

include 'index-blank.php';
?>