<?php

// ************ НАСТРОЙКИ ************ //

// Развернут ли сайт в Интернете?
if (!defined('LIVE')) DEFINE('LIVE', false);

// Информация об ошибках отправлена по электронной почте
DEFINE('CONTACT_EMAIL', 'metasystems@gmail.com');

// ************ НАСТРОЙКИ ************ //

// ************ КОНСТАНТЫ *********** //

// Идентификация местоположения файлов и URL-ссылки на сайт
define ('BASE_URI', 'C:\wamp\www\oop/');
define ('BASE_URL', 'localhost/');
define ('MYSQL', BASE_URI . 'includes/mysql.inc.php');


// ************ СЕАНСЫ *********** //
// Запуск сеанса
//session_start();
