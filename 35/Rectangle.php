<?php

require_once 'Figure.php';

class Rectangle extends Figure
{
    private int $a;
    private int $b;

    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    /**
     * @return float|int
     */
    public function getSquare(): float|int
    {
        return $this->a * $this->b;
    }

    /**
     * @return float|int
     */
    public function getPerimeter(): float|int
    {
        return 2 * ($this->a + $this->b);
    }
}