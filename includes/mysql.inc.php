<?php

// Этот файл включает информацию, применяемую для доступа к базе данных 
// Этот файл устанавливает подключение к MySQL и выбирает базу данных
// Этот файл определяет функцию, обеспечивающую безопаность данных, применяемых в запросах
// Этот файл определяет функцию, применяемую для хеширования паролей
// Этот сценарий начал создаваться в главе 3.

// Настройка констант, применяемых для доступа к базе данных
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'oop');

// Создание подключения процедурный код
//$dbc = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Создание подключения OOP
$dbc = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// проверка соединения с сервером. mysqli_connect_errno() выдает код ошибки последней попытки подключения к БД
// по книге она делается в файле конфигурации!!!
if (mysqli_connect_errno()) { 
   printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error()); 
   exit; 
} 

// Настройка набора символов
mysqli_set_charset($dbc, 'utf8');

// Функция, применяемая для экранирования и уменьшения объема данных формы
// Принимает один аргумент: рассматриваемые данные (строка).
// Возвращает обработанные данные (строку)
function escape_data ($data, $dbc) { 

	// Убирает символы косой черт, если включены "волшебные" кавычки
	if (get_magic_quotes_gpc()) $data = stripslashes($data);
	
	// Применяется trim() и mysqli_real_escape_string()
	return mysqli_real_escape_string ($dbc, trim ($data));
	
} // конец фукнции escape_data()

// Пропущен закрывающий тег PHP, чтобы избежать появления ошибок 'headers are sent'!
