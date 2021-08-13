<?php
/*
 * Применение интерфейсов.
 * http://code.mu/ru/php/book/oop/interfaces/applying/
 */

require_once 'FiguresCollection.php';
require_once '../36/Disk.php';

$figuresCollection = new FiguresCollection;

$figuresCollection->add(new Disk(10));
$figuresCollection->add(new Disk(15));

var_dump($figuresCollection->getTotalPerimeter());
var_dump($figuresCollection->getTotalSquare());