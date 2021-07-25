<?php
/*
 * Статические свойства.
 * Статическое свойство внутри класса.
 * Применение.
 * http://code.mu/ru/php/book/oop/static-properties/
 */
require_once 'Num.php';
require_once 'Geometry.php';

/*
 * Задача 30.1
 * Сделайте класс Num, у которого будут два публичных статических свойства: num1 и num2.
 * Запишите в первое свойство число 2, а во второе - число 3. Выведите сумму значений свойств на экран.
 */
// Skipped

var_dump(Num::getSum());

var_dump(Geometry::getCircleVolume(10));
