<?php
/*
 * Хранение классов в отдельных файлах
 * http://code.mu/ru/php/book/oop/one-class-one-file/
 */

// Задача 10.2
// Подключите к файлу index.php класс Employee, создайте два объекта этого класса с произвольными данными,
// выведите на экран сумму их зарплат.
require_once 'Employee.php';

$emp1 = new Employee('Вова', 'Иванов', 'Петрович', 250);
$emp2 = new Employee('Иван', 'Яценюк', 'Стапанович', 500);

echo $emp1->getSalary() + $emp2->getSalary();