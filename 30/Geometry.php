<?php

class Geometry
{
    private static $pi = 3.14;

    /**
     * @param $radius
     * @return float|int
     */
    public static function getCircleSquare($radius)
    {
        return self::$pi * $radius * $radius;
    }

    /**
     * @param $radius
     * @return float|int
     */
    public static function getCircleCircuit($radius)
    {
        return 2 * self::$pi * $radius;
    }

    /*
     * Задача 30.4
     * Добавьте в наш класс Geometry метод, который будет находить объем шара по радиусу.
     * С помощью этого метода выведите на экран объем шара с радиусом 10.
     */
    /**
     * @param $radius
     * @return float|int
     */
    public static function getCircleVolume($radius)
    {
        return 4/3 * self::$pi * $radius * $radius * $radius;
    }
}