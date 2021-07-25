<?php

/*
 * Задача 19.1
 * Не подсматривая в мой код реализуйте такие же классы User, Employee.
 */

require_once 'User.php';

class Employee extends User
{
    private int $salary;

    public function getSalary(): int
    {
        return $this->salary;
    }

    public function setSalary(int $salary): void
    {
        $this->salary = $salary;
    }
}