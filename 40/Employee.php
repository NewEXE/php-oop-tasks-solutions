<?php

/*
 * Задача 40.3
 * Сделайте класс Employee, реализующий интерфейс iEmployee.
 */

require_once 'iEmployee.php';

class Employee implements iEmployee
{

    private int $name;
    private int $salary;
    private int $age;

    /**
     * @inheritDoc
     */
    public function getSalary(): int
    {
        return $this->salary;
    }

    /**
     * @inheritDoc
     */
    public function setSalary(int $salary): void
    {
        $this->salary = $salary;
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @inheritDoc
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @inheritDoc
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @inheritDoc
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }
}