<?php
/*
 * Хранение объектов в массивах
 * http://code.mu/ru/php/book/oop/objects-in-array/
 */
require_once 'City.php';

// Задача 11.2
// Создайте 5 объектов класса City, заполните их данными и запишите в массив.
$cities = [
    new City('Харьков', 100),
    new City('Киев', 200),
    new City('Львов', 300),
    new City('Одесса', 400),
    new City('Осло', 500),
];

// Задача 11.3
// Переберите созданный вами массив с городами циклом и выведите города и их население на экран.
foreach ($cities as $city) {
    echo sprintf('%s, население: %d<br />', $city->getName(), $city->getPopulation());
}