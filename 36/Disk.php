<?php

require_once 'Figure.php';

/*
 * Задача 36.1
 * Сделайте класс Disk (круг), реализующий интерфейс Figure.
 */
class Disk implements Figure
{
    const PI = 3.14;
    private $radius;

    /**
     * @param int $radius
     */
    public function __construct(int $radius)
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
    public function getPerimeter(): float
    {
        return 2 * self::PI * $this->radius;
    }
}