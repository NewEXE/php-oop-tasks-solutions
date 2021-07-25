<?php

/*
 * Задача 29.1
 * Переделайте методы класса ArraySumHelper на статические.
 */
class ArraySumHelper
{
    public static function getSum1(array $arr)
    {
        return self::getSum($arr, 1);
    }

    public static function getSum2(array $arr)
    {
        return self::getSum($arr, 2);
    }

    public static function getSum3(array $arr)
    {
        return self::getSum($arr, 3);
    }

    public static function getSum4(array $arr)
    {
        return self::getSum($arr, 4);
    }

    private static function getSum(array $arr, int $power)
    {
        $sum = 0;

        foreach ($arr as $elem) {
            $sum += $elem ** $power;
        }

        return $sum;
    }
}