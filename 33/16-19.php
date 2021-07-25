<?php
/*
 * Задача 33.16
 * Сделайте класс ChildClass наследующий от ParentClass, который в свою очередь наследует от GrandParentClass
 */

class GrandParentClass {}
class ParentClass extends GrandParentClass {}
class ChildClass extends ParentClass {}

/*
 * Задача 33.17
 * С помощью функции is_subclass_of проверьте, является ли класс ChildClass потомком GrandParentClass.
 */
var_dump(is_subclass_of(ChildClass::class, GrandParentClass::class));

/*
 * Задача 33.18
 * С помощью функции is_subclass_of проверьте, является ли класс ParentClass потомком GrandParentClass.
 */
var_dump(is_subclass_of(ParentClass::class, GrandParentClass::class));

/*
 * Задача 33.19
 * С помощью функции is_subclass_of проверьте, является ли класс ChildClass потомком ParentClass.
 */
var_dump(is_subclass_of(ChildClass::class, ParentClass::class));