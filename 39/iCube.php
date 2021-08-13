<?php

/*
 * Задача 39.1
 * Сделайте интерфейс iCube, который будет описывать фигуру Куб.
 * Пусть ваш интерфейс описывает конструктор, параметром принимающий сторону куба, а также методы для получения объема куба и площади поверхности.
 */
interface iCube
{
    /**
     * @param int $a
     */
    public function __construct(int $a);

    /**
     * @return float
     */
    public function getSquare(): float;

    /**
     * @return float
     */
    public function getVolume(): float;
}