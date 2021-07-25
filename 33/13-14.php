<?php
/*
 * Задача 33.13
 * Сделайте класс Test со свойством prop1 и без свойства prop2.
 * Проверьте, что выведет функция property_exists для свойства prop1 и для свойства prop2.
 */

class Test
{
    public $prop1 = 'property 1';
    public $prop3 = 'property 3';
}

var_dump(property_exists(Test::class, 'prop1')); // true
var_dump(property_exists(Test::class, 'prop2')); // false

/*
 * Задача 33.14
 * Дан массив со свойствами класса. Дан также класс, имеющий часть из этих свойств.
 * Переберите этот массив циклом, для каждого свойства проверьте, существует ли оно в классе и, если существует, выведите на экран значение этого свойства.
 */
$props = [
    'prop1',
    'prop2',
    'prop3',
    'prop4',
];
foreach ($props as $prop) {
    if (property_exists(Test::class, $prop)) {
        echo (new Test())->$prop . '<br/>';
    }
}