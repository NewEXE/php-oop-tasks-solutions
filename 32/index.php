<?php
/*
 * Константы классов.
 * Обращение к константам внутри класса.
 * Применение.
 */

/*
 * Задача 32.2
 * С помощью написанного класса Circle найдите длину окружности и площадь круга с радиусом 10.
 */
require_once 'Circle.php';

$circle = new Circle(10);
var_dump($circle->getCircuit());
var_dump($circle->getSquare());