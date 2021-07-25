<?php
/*
 * Сравнение объектов.
 * Применение.
 * Функция in_array.
 * http://code.mu/ru/php/book/oop/objects-comparison/
 */

/*
 * Задача 26.1
 * Сделайте функцию compare, которая параметром будет принимать два объекта и возвращать true,
 * если они имеют одинаковые свойства и значения являются экземплярами одного и того же класса, и false, если это не так.
 */
function compare1(object $obj1, object $obj2): bool {
    return $obj1 == $obj2;
}

/*
 * Задача 26.2
 * Сделайте функцию compare, которая параметром будет принимать два объекта и возвращать true,
 * если переданные переменные ссылаются на один и тот же объект, и false, если на разные.
 */
function compare2(object $obj1, object $obj2): bool {
    return $obj1 === $obj2;
}

/*
 * Задача 26.3
 * Сделайте функцию compare, которая параметром будет принимать два объекта и сравнивать их.
 * Функция должна возвращать 1, если переданные переменные ссылаются на один и тот же объект.
 * Функция должна возвращать 0, если объекты разные, но одного и того же класса и с теми же свойствами и их значениями.
 * Функция должна возвращать -1 в противном случае.
 */
function compare3(object $obj1, object $obj2): int {
    if ($obj1 === $obj2) {
        return 1;
    }

    if ($obj1 == $obj2) {
        return 0;
    }

    return -1;
}

require_once 'Employee.php';
require_once 'EmployeesCollection.php';

echo '<pre>';

$employeesCollection = new EmployeesCollection;

$employeesCollection->addIfNotAdded(new Employee('Коля', 100));
$employeesCollection->addIfNotAdded(new Employee('Коля', 100)); // wasn't add

$employeesCollection->dump();

$employeesCollection->addIfNotAddedStrict(new Employee('Вася', 200));
$employeesCollection->addIfNotAddedStrict(new Employee('Вася', 200)); // was added

$employeesCollection->dump();

$employee = new Employee('Петя', 300);
$employeesCollection->addIfNotAddedStrict($employee);
$employeesCollection->addIfNotAddedStrict($employee); // wasn't add
$employeesCollection->addIfNotAddedStrict($employee); // wasn't add

$employeesCollection->dump();

echo '</pre>';