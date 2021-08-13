<?php

require_once 'iCube.php';

class Cube implements iCube
{
    private int $a;

    /**
     * @inheritDoc
     */
    public function __construct(int $a)
    {
        $this->a = $a;
    }

    /**
     * @inheritDoc
     */
    public function getSquare(): float
    {
        return 6 * ($this->a ** 2);
    }

    /**
     * @inheritDoc
     */
    public function getVolume(): float
    {
        return $this->a ** 3;
    }
}