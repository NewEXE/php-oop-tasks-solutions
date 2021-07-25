<?php
/*
 * Цепочки методов
 * http://code.mu/ru/php/book/oop/chains-of-methods/
 */
require_once 'User.php';

echo (new User)
    ->setName('Николай')
    ->setPatronymic('Иванович')
    ->setSurname('Петров')
    ->getFullName(); // выведет 'ПНИ'