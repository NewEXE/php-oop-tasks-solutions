<?php

require_once '../36/Figure.php';

class FiguresCollection
{
    /** @var Figure[] */
    private array $figures = [];

    /**
     * @param Figure $figure
     */
    public function add(Figure $figure)
    {
        $this->figures[] = $figure;
    }

    /**
     * @return float|int
     */
    public function getTotalSquare(): float|int
    {
        $sum = 0;

        foreach ($this->figures as $figure) {
            $sum += $figure->getSquare();
        }

        return $sum;
    }

    /*
     * Задача 37.2
     * Добавьте в класс FiguresCollection метод getTotalPerimeter для нахождения суммарного периметра всех фигур.
     */
    /**
     * @return float|int
     */
    public function getTotalPerimeter(): float|int
    {
        $sum = 0;

        foreach ($this->figures as $figure) {
            $sum += $figure->getPerimeter();
        }

        return $sum;
    }
}