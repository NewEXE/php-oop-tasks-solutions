<?php
/*
 * Абстрактные классы.
 * Абстрактные методы.
 *
 * http://code.mu/ru/php/book/oop/abstract-classes/
 */

require_once 'Student.php';
require_once 'Rectangle.php';

$student = new Student('Vlad');

$student->increaseRevenue(10);

var_dump($student->getScholarship());

$student->decreaseRevenue(15);

var_dump($student->getScholarship());

$rectangle = new Rectangle(2, 4);
var_dump($rectangle->getSquare()); // 8
var_dump($rectangle->getPerimeter()); // 12

var_dump($rectangle->getSquarePerimeterSum()); // 20