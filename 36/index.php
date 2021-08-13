<?php
/*
 * Интерфейсы в ООП на PHP.
 * http://code.mu/ru/php/book/oop/interfaces/
 */

require_once 'Disk.php';

$circle = new Disk(10);

var_dump($circle->getPerimeter());
var_dump($circle->getSquare());