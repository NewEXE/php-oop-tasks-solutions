<?php

/*
 * Задача 27.9
 * Сделайте класс City с публичными свойствами name (название города) и population (количество населения).
 */
class City
{
    public string $name;
    public int $population;

    public function __construct(string $name, int $population)
    {
        $this->name = $name;
        $this->population = $population;
    }
}