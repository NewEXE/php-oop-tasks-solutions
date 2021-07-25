<?php
/*
 * Задача 33.9
 * Пусть у вас есть класс Test1 и нет класса Test2.
 * Проверьте, что выведет функция class_exists для класса Test1 и для класса Test2.
 */

class Test1 {}

var_dump(class_exists(Test1::class)); // true
var_dump(class_exists('Test2')); // false

/*
 * Задача 33.10
 * Пусть GET параметром в адресную строку передается название класса.
 * Проверьте, существует ли такой класс.
 * Выведите соответствующее сообщение на экран.
 */

$class = filter_input(INPUT_GET, 'class', FILTER_SANITIZE_STRING);
$class = trim($class);

if (!empty($class)) {
    var_dump(class_exists($class));
}