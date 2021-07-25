<?php
/*
 * Задача 33.8
 * Сделайте класс Test с публичными свойствами prop1 и prop2, а также с приватными свойствами prop3 и prop4.
 * Создайте объект этого класса.
 * С помощью функции get_object_vars получите массив свойств созданного объекта.
 */

class Test {
    public $prop1;
    public $prop2;

    private $prop3;
    private $prop4;
}

$test = new Test();

var_dump(get_object_vars($test));