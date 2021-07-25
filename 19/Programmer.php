<?php

/*
 * Сделайте класс Programmer, который будет наследовать от класса Employee.
 * Пусть новый класс имеет свойство langs, в котором будет хранится массив языков, которыми владеет программист.
 * Сделайте также геттер и сеттер для этого свойства.
 */

require_once 'Employee.php';

class Programmer extends Employee
{
    private array $langs = [];

    /**
     * @return array
     */
    public function getLangs(): array
    {
        return $this->langs;
    }

    /**
     * @param array $langs
     */
    public function setLangs(array $langs): void
    {
        $this->langs = $langs;
    }
}