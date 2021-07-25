<?php
/*
 * Задача 33.15
 * Сделайте класс ChildClass наследующий от ParentClass.
 * С помощью функции get_parent_class выведите на экран родителя класса ParentClass.
 */

class ParentClass {}
class ChildClass extends ParentClass {}

var_dump(get_parent_class(ChildClass::class));