<?php
/*
 * Хранение классов в отдельных файлах
 * http://code.mu/ru/php/book/oop/one-class-one-file/
 */

// Задача 10.1
// Сделайте класс Employee, в котором будут следующие свойства: name (имя), surname (фамилия), patronymic (отчество) и salary (зарплата).
// Пусть этот класс хранится в отдельном файле.
class Employee
{
    private string $name;
    private string $surname;
    private string $patronymic;
    private int $salary;

    public function __construct(string $name, string $surname, string $patronymic, int $salary)
    {
        $this->setName($name);
        $this->setSurname($surname);
        $this->setPatronymic($patronymic);
        $this->setSalary($salary);
    }

    /**
     * @return int
     */
    public function getSalary(): int
    {
        return $this->salary;
    }

    /**
     * @param int $salary
     */
    public function setSalary(int $salary): void
    {
        $this->salary = $salary;
    }

    /**
     * @param string $patronymic
     */
    public function setPatronymic(string $patronymic): void
    {
        $this->patronymic = $patronymic;
    }

    /**
     * @param string $surname
     */
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

}