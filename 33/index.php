<?php
/*
 * Функции для работы с классами и объектами
 * http://code.mu/ru/php/book/oop/functions/
 */

$file = filter_input(INPUT_GET, 'f', FILTER_SANITIZE_STRING);
$file = trim($file);

if (empty($file)) {
    die('Please pass "f" param with filename for opening. Ex: [...]/index.php/33/?f=5.php');
}

if (!str_ends_with($file, '.php')) {
    $file .= '.php';
}

echo '<pre>';
require_once $file;
echo '<pre>';