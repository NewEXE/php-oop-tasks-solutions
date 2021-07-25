<?php
/*
 * Задача 33.11
 * Сделайте класс Test с методом method1 и без метода method2.
 * Проверьте, что выведет функция method_exists для метода method1 и для метода method2.
 */

class Test
{
    public function method1()
    {
        return sprintf('Method %s of class %s was called', __FUNCTION__, __CLASS__);
    }
}

var_dump(method_exists(Test::class, 'method1')); // true
var_dump(method_exists(Test::class, 'method2')); // false

/*
 * Задача 33.12
 * Пусть GET параметрами в адресную строку передаются название класса и его метод.
 * Проверьте, существует ли такой класс. Если существует - проверьте существование переданного метода.
 * Если и метод существует - создайте объект данного класса, вызовите указанный метод и выведите результат его работы на экран.
 */

$class = filter_input(INPUT_GET, 'class', FILTER_SANITIZE_STRING);
$class = trim($class);

$method = filter_input(INPUT_GET, 'method', FILTER_SANITIZE_STRING);
$method = trim($method);

if (empty($class) || empty($method)) {
    // Не передали в параметрах класс либо метод.
    return;
}

if (!class_exists($class)) {
    // Класса не существует.
    return;
}

if (!method_exists($class, $method)) {
    // Метода у класса не существует.
    return;
}

$obj = new $class();
echo $obj->$method();