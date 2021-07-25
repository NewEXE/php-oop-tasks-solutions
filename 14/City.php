<?php

// Задача 14.1
// Сделайте класс City (город), в котором будут следующие свойства - name (название), foundation (дата основания), population (население).
class City
{
    private string $name;
    private DateTime $foundation;
    private int $population;

    public function __construct(string $name, DateTime $foundation, int $population)
    {
        $this->name = $name;
        $this->foundation = $foundation;
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
     * @param string $format
     * @return string
     */
    public function getFoundation(string $format = 'Y-m-d'): string
    {
        return $this->foundation->format($format);
    }

    /**
     * @return int
     */
    public function getPopulation(): int
    {
        return $this->population;
    }
}