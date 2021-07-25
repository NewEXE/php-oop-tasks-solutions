<?php
/*
 * Задача 33.20
 * Сделайте класс ChildClass наследующий от ParentClass.
 * Создайте объект класса ChildClass, запишите его в переменную $obj.
 */

class ParentClass {}
class ChildClass extends ParentClass {}

$obj = new ChildClass();

/*
 * Задача 33.21
 * С помощью функции is_a проверьте, принадлежит ли объект $obj классу ChildClass.
 */
var_dump(is_a($obj, ChildClass::class));

/*
 * Задача 33.22
 * С помощью функции is_a проверьте, принадлежит ли объект $obj классу ParentClass.
 */
var_dump(is_a($obj, ParentClass::class));