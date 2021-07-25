<?php
/*
 * Переменные названия свойств.
 * Массив свойств.
 * Ассоциативный массив.
 * Имя свойства из функции.
 * Имя свойства из свойства другого объекта.
 * Имя свойства из метода другого объекта.
 *
 * http://code.mu/ru/php/book/oop/variable-properties-names/
 *
 */
require_once 'City.php';
require_once 'User.php';

// Задача 14.1
// Создайте объект этого класса <класса City>.
$kharkov = new City('Харьков', new DateTime('2008-06-30'), 10000);

// Задача 14.2
// Пусть дана переменная $props, в которой хранится массив названий свойств класса City.
// Переберите этот массив циклом foreach и выведите на экран значения соответствующих свойств.
$props = ['name', 'foundation', 'population'];

foreach ($props as $prop) {
    $propertyGetter = 'get'.ucfirst($prop);
    echo $kharkov->$propertyGetter();
    echo '<br />';
}

/*
 * Задача 14.3
 * Скопируйте мой код класса User и массив $props.
 * В моем примере на экран выводится фамилия юзера. Выведите еще и имя, и отчество.
 */
$user = new User('Иванов', 'Иван', 'Иванович');

$props = ['surname', 'name', 'patronymic'];

// Способ решения 1:
echo $user->{$props[0]};
echo $user->{$props[1]};
echo $user->{$props[2]};

// Способ решения 2:
foreach ($props as $prop) {
    echo $user->{$prop};
}

// Способ решения 3:
foreach ($props as $propIndex => $prop) {
    echo $user->{$props[$propIndex]};
}

// Способ решения 4:

// Чтобы не орудовать поядковыми индексами, которые могут измениться,
// сделаем ключи такими же, как и значения.
$props = array_combine($props, $props);

echo $user->{$props['surname']};
echo $user->{$props['name']};
echo $user->{$props['patronymic']};