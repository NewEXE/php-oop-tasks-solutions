<?php
/*
 * Задача 33.23
 * Выведите на экран список всех объявленных классов.
 */

foreach (get_declared_classes() as $class) {
    echo $class . '<br />';
}