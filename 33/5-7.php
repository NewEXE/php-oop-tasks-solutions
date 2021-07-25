<?php
/*
 * Задача 33.5
 * Сделайте класс Test с публичными свойствами prop1 и prop2, а также с приватными свойствами prop3 и prop4.
 */

class Test {
    /*
     * Задача 33.7
     * Вызовите функцию get_class_vars внутри класса Test (например, в конструкторе). Выведите массив доступных свойств.
     */
    public function __construct()
    {
        var_dump(get_class_vars(self::class));
    }

    public $prop1;
    public $prop2;

    private $prop3;
    private $prop4;
}

/*
 * Задача 33.6
 * Вызовите функцию get_class_vars снаружи класса Test. Выведите массив доступных свойств.
 */
var_dump(get_class_vars(Test::class));

/*
 * Задача 33.7
 */
new Test();