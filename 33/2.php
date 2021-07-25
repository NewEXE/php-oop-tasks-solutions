<?php
/*
 * Задача 33.2
 * Сделайте два класса: Test1 и Test2. Пусть оба класса имеют свойство name.
 * Создайте некоторое количество объектов этих классов и запишите в массив $arr в произвольном порядке.
 * Переберите этот массив циклом и для каждого объекта выведите значение его свойства name и имя класса, которому принадлежит объект.
 */

class Test1
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class Test2
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

$arr = [
    new Test1('2'),
    new Test1('3'),
    new Test2('4'),
    new Test2('5'),
];
foreach ($arr as $obj) {
    printf('Объект с именем: %s, класс %s<br/>', $obj->name, get_class($obj));
}