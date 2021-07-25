<?php
/*
 * Задача 33.4
 * Создайте объект класса Test, запишите его в переменную $test.
 * С помощью функции get_class_methods получите массив названий методов объекта. Переберите его циклом и в цикле вызовите каждый метод класса, используя объект $test.
 * Переберите этот массив циклом и в этом цикле вызовите каждый метод объекта.
 */

class Test
{
    public function method1()
    {
        return sprintf('Method %s was called', __FUNCTION__);
    }

    public function method2()
    {
        return sprintf('Method %s was called', __FUNCTION__);
    }

    public function method3()
    {
        return sprintf('Method %s was called', __FUNCTION__);
    }
}

$test = new Test();
foreach (get_class_methods($test) as $method) {
    echo $test->$method().'<br />';
}