<?php
/*
 * Класс как набор методов
 * http://code.mu/ru/php/book/oop/class-as-methods-set/
 */
require_once 'ArrayAvgHelper.php';

$arr = [1, 2, 3];
$arrayAvgHelper = new ArrayAvgHelper;

var_dump($arrayAvgHelper->getAvg4($arr));