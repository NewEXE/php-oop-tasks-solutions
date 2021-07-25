<?php

/*
 * Задача 27.1
 * Сделайте класс Employee с публичными свойствами name (имя) и salary (зарплата).
 */

/*
 * Задача 27.8
 * Сделайте класс Employee, который будет наследовать от класса User и добавлять salary (зарплата).
 */

require_once 'User.php';

class Employee extends User
{
    public int $salary;

    public function __construct(string $name, int $salary, string $surname = '') // optional param for passing 27.3
    {
        $this->salary = $salary;

        parent::__construct($name, $surname);
    }
}