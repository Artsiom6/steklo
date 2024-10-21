<?
$filename = $_SERVER['PHP_SELF'];
$needarticleurl = "addition/articles$filename" ;
$numpage = $_GET['p']+1 ;
$pagemax = 2;

$metatitle = "Каталог прошлых образцов рисунков для матирования стекла, рисунки на стекле пескоструй (стр. $numpage) - СтеклоФэст" ;
$metadescription = 'Выберите онлайн в нашем каталоге прошлых изображений рисунок для нанесения на стекло пескоструйной обработкой';
$metakeywords = 'каталог рисунков прошлый прошлом нанесение на стекло пескоструй пескоструйная обработка';

include 'index-blank.php';
?>