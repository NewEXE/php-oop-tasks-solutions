<?php

// Задача 11.1
// Сделайте класс City (город), в котором будут следующие свойства: name (название города), population (количество населения).
class City
{
    private string $name;
    private int $population;

    public function __construct(string $name, string $population)
    {
        $this->name = $name;
        $this->population = $population;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getPopulation(): int
    {
        return $this->population;
    }
}