<?php
/*
 * Перезапись конструктора родителя в потомке.
 * Используем конструктор родителя.
 * http://code.mu/ru/php/book/oop/overriding-of-parent-constructor/
 */

require_once 'User.php';

$user = new User('Вася', 'Пупкин', '2007-03-23');

var_dump($user->getAge());