<?php
/*
 * Задача 28.1
 * Сделайте класс Post (должность), в котором будут следующие свойства, доступные только для чтения:
 * name (название должности) и salary (зарплата на этой должности).
 */

class Post
{
    private string $name;
    private int $salary;

    public function __construct(string $name, int $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
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
    public function getSalary(): int
    {
        return $this->salary;
    }
}