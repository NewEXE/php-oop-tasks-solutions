<?php
/*
 * Начальные значения свойств при объявлении
 * http://code.mu/ru/php/book/oop/initial-properties-values-in-declaring/
 */
require_once 'Arr.php';

$arr = new Arr();
$arr->add([1,2,3]);
var_dump($arr);

$arr->addBefore([4,5]);
var_dump($arr);

$avg = $arr->getAvg();
var_dump($avg);