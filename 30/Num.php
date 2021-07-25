<?php

/*
 * Задача 30.2
 * Сделайте класс Num, у которого будут два приватны статических свойства: num1 и num2.
 * Пусть по умолчанию в свойстве num1 хранится число 2, а в свойстве num2 - число 3.
 */

class Num
{
    private static int $num1 = 2;
    private static int $num2 = 3;

    /*
     * Задача 30.3
     * Сделайте в классе Num метод getSum, который будет выводить на экран сумму значений свойств num1 и num2.
     */
    public static function getSum()
    {
        return self::$num1 + self::$num2;
    }
}