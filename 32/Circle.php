<?php

/*
 * Задача 32.1
 * Реализуйте предложенный класс Circle самостоятельно.
 */

class Circle
{
    const PI = 3.14;
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return float
     */
    public function getSquare(): float
    {
        return self::PI * ($this->radius * $this->radius);
    }

    /**
     * @return float
     */
    public function getCircuit(): float
    {
        return (2 * self::PI) * $this->radius;
    }
}