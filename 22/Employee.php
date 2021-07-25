<?php

/*
 * Задача 22.6
 * Сделайте класс Employee, который будет наследовать от класса User.
 * Пусть новый класс имеет свойство salary, в котором будет хранится зарплата работника.
 * Зарплата должна передаваться четвертым параметром в конструктор объекта. Сделайте также геттер для этого свойства.
 */

require_once 'User.php';

class Employee extends User
{
    private int $salary;

    /**
     * Employee constructor.
     * @param $surname
     * @param $name
     * @param $patronymic
     * @param $salary
     */
    public function __construct($surname, $name, $patronymic, $salary)
    {
        $this->salary = $salary;

        parent::__construct($surname, $name, $patronymic);
    }

    /**
     * @return int
     */
    public function getSalary(): int
    {
        return $this->salary;
    }
}