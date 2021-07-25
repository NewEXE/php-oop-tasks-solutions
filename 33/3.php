<?php
/*
 * Задача 33.3
 * Сделайте класс Test с методами method1, method2 и method3.
 * С помощью функции get_class_methods получите массив названий методов класса Test.
 */

class Test
{
    public function method1() {}
    public function method2() {}
    public function method3() {}
}

var_dump(get_class_methods(Test::class));