<?php
/*
 * Переменные названия методов
 * http://code.mu/ru/php/book/oop/variable-methods-names/
 */
require_once 'User.php';

$user = new User('Коля', 21);
$methods = ['method1' => 'getName', 'method2' => 'getAge'];

foreach ($methods as $method) {
    echo $user->$method() . ' ';
}