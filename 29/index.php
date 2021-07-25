<?php
/*
 * Статические методы.
 * Статические методы внутри класса.
 * http://code.mu/ru/php/book/oop/static-methods/
 */

require_once 'ArraySumHelper.php';

/*
 * Задача 29.2
 * Пусть дан массив с числами. Найдите с помощью класса ArraySumHelper сумму квадратов элементов этого массива.
 */
$arr = [1,2,3];

var_dump(ArraySumHelper::getSum2($arr)); // must be 14: 1 + (2*2) + (3*3)) = 1 + 4 + 9