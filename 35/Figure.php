<?php

abstract class Figure
{
    abstract public function getSquare(): float|int;
    abstract public function getPerimeter(): float|int;

    /**
     * @return float|int
     */
    public function getRatio(): float|int
    {
        return $this->getSquare() / $this->getPerimeter();
    }

    /*
     * Задача 35.5
     * Добавьте в класс Figure метод getSquarePerimeterSum, который будет находить сумму площади и периметра.
     */
    public function getSquarePerimeterSum(): float|int
    {
        return $this->getSquare() + $this->getPerimeter();
    }
}