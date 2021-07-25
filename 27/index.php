<?php
/*
 * Определение принадлежности объекта к классу.
 * Оператор instanceof и наследование.
 * Применение.
 * http://code.mu/ru/php/book/oop/operator-instanceof/
 */

/*
 * Задача 27.3
 * Создайте по 3 объекта каждого класса и в произвольном порядке запишите их в массив $arr.
 */
require_once 'Employee.php';
require_once 'Student.php';
require_once 'User.php';
require_once 'City.php';

echo '<pre>';

/** @var Employee[]|Student[] $arr */
$arr = [];

$arr[] = new Employee('Иван', 100);
$arr[] = new Employee('Степан', 300);
$arr[] = new Employee('Инокентий', 500);

$arr[] = new Student('Юрий', 400);
$arr[] = new Student('Влад', 600);
$arr[] = new Student('Пётр', 200);

/*
 * Задача 27.4
 * Переберите циклом массив $arr и выведите на экран столбец имен всех работников.
 */
foreach ($arr as $user) {
    if ($user instanceof Employee) {
        echo $user->name . '<br />';
    }
}

/*
 * Задача 27.5
 * Аналогичным образом выведите на экран столбец имен всех студентов.
 */
foreach ($arr as $user) {
    if ($user instanceof Student) {
        echo $user->name . '<br />';
    }
}

/*
 * Задача 27.6
 * Переберите циклом массив $arr и с его помощью найдите сумму зарплат работников и сумму стипендий студентов.
 * После цикла выведите эти два числа на экран.
 */
$scholarshipSum = 0;
$salarySum = 0;

foreach ($arr as $user) {
    if ($user instanceof Student) {
        $scholarshipSum += $user->scholarship;
    }

    if ($user instanceof Employee) {
        $salarySum += $user->salary;
    }
}

echo sprintf('%s, %s<br/>', $scholarshipSum, $salarySum);

/*
 * Задача 27.10
 * Создайте 3 объекта класса User, 3 объекта класса Employee, 3 объекта класса City,
 * и в произвольном порядке запишите их в массив $arr.
 */
$arr = [];

$arr[] = new User('Иван', 'Петров');
$arr[] = new User('Степан', 'Разин');
$arr[] = new User('Инокентий', 'Смоктуновский');

$arr[] = new Employee('Кодзима', 30000000, 'Гений');
$arr[] = new Employee('Владимир', 200000, 'Зеленский',);
$arr[] = new Employee('Валерий', 1000, 'Леонтьев');

$arr[] = new City('Харьков', 1500000);
$arr[] = new City('Киев', 20500000);
$arr[] = new City('Белгород', 20000);

/*
 * Задача 27.11
 * Переберите циклом массив $arr и выведите на экран столбец свойств name тех объектов,
 * которые принадлежат классу User или потомку этого класса.
 */
foreach ($arr as $user) {
    if ($user instanceof User) {
        echo $user->name . '<br />';
    }
}

/*
 * Задача 27.12
 * Переберите циклом массив $arr и выведите на экран столбец свойств name тех объектов,
 * которые НЕ принадлежат классу User или потомку этого класса.
 */
foreach ($arr as $user) {
    if (!$user instanceof User) {
        echo $user->name . '<br />';
    }
}

/*
 * Задача 27.13
 * Переберите циклом массив $arr и выведите на экран столбец свойств name тех объектов,
 * которые принадлежат именно классу User, то есть не классу City и не классу Employee.
 */
foreach ($arr as $user) {
    if (!$user instanceof Employee && $user instanceof User) {
        echo $user->name . '<br />';
    }
}

/*
 * Задача 27.14
 * Скопируйте мой код классов Employee и Student и самостоятельно не подсматривая в мой код реализуйте такой же класс UsersCollection.
 */
// Skipped

echo '</pre>';