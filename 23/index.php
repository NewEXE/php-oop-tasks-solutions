<?php
/*
 * Передача объектов по ссылке
 * http://code.mu/ru/php/book/oop/passing-objects-by-reference/
 */

require_once 'Product.php';

// Задача 23.2
// Создайте объект класса Product, запишите его в переменную $product1.
$product1 = new Product();

// Задача 23.3
// Присвойте значение переменной $product1 в переменную $product2.
// Проверьте то, что обе переменные ссылаются на один и тот же объект.
$product2 = $product1;

var_dump($product1 === $product2); // must be true because has ref to the same object