<?php

/*
 * Задача 41.2
 * Сделайте класс Cube (куб), который будет реализовывать интерфейс Figure3d.
 */

require_once 'Figure3d.php';

class Cube implements Figure3d
{
    private int $a;

    public function __construct(int $a)
    {
        $this->a = $a;
    }

    public function getVolume(): int|float
    {
        return $this->a ** 3;
    }

    public function getSurfaceSquare(): int|float
    {
        return 6 * ($this->a ** 2);
    }
}