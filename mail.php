<?php



// Сообщение
// Отправляем

mail("steklofest@yandex.ru", "Запрос с сайта", "Имя: $_GET[name]\nТелефон: $_GET[phone]", "From: steklofest.by <mail@{$_SERVER['SERVER_NAME']}>\r\n");





?>