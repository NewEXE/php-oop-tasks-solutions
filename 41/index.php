<?php

/*
 * Несколько интерфейсов.
 * http://code.mu/ru/php/book/oop/interfaces/implementation-of-several-interfaces/
 */

/*
 * Задача 41.3
 * Создайте несколько объектов класса Quadrate, несколько объектов класса Rectangle и несколько объектов класса Cube.
 * Запишите их в массив $arr в случайном порядке.
 */

require_once '../35/Quadrate.php';
require_once '../35/Rectangle.php';
require_once '../35/Figure.php';
require_once 'Cube.php';
require_once 'Figure3d.php';

$quadrate = new Quadrate(5);
$rectangle = new Rectangle(4,5);
$cube = new Cube(4);

$arr = [$rectangle, $quadrate, $cube];

/*
 * Задача 41.4
 * Переберите циклом массив $arr и выведите на экран только площади объектов реализующих интерфейс Figure.
 */
/*
 * Задача 41.5
 * Переберите циклом массив $arr и выведите для плоских фигур их площади, а для объемных - площади их поверхности.
 */
foreach ($arr as $obj) {
    if ($obj instanceof Figure) {
        var_dump($obj->getSquare());
    } elseif($obj instanceof Figure3d) {
        var_dump($obj->getSurfaceSquare());
    }
}