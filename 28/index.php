<?php
/*
 * Контроль типов при работе с объектами.
 * http://code.mu/ru/php/book/oop/types-control/
 */

/*
 * Задача 28.2
 * Создайте несколько объектов класса Post: программист, менеджер, водитель.
 */
require_once 'Post.php';
require_once 'Employee.php';

$programmer = new Post('Программист', 2000);
$manager = new Post('Менеджер', 1000);
$driver = new Post('Водитель', 500);

/*
 * Задача 28.7
 * Создайте объект класса Employee с должностью программист.
 * При его создании используйте один из объектов класса Post, созданный нами ранее.
 */
$emp = new Employee('Павел', 'Барнашев', $programmer);

/*
 * Задача 28.8
 * Выведите на экран имя, фамилию, должность и зарплату созданного работника.
 */
echo $emp->getName();
echo $emp->getSurname();
echo $emp->getPost()->getName();
echo $emp->getPost()->getSalary();