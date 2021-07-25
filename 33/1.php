<?php
/*
 * Задача 33.1
 * Сделайте объект какого-нибудь класса. Примените к объекту функцию get_class и узнайте имя класса, которому принадлежит объект.
 */

class SomeClass {}

$object = new SomeClass();
var_dump(get_class($object));