<?php

/*
 * Задача 40.2
 * Сделайте интерфейс iEmployee, наследующий от интерфейса iUser
 * и добавляющий в него методы getSalary и setSalary.
 */

require_once 'iUser.php';

interface iEmployee extends iUser
{
    /**
     * @return int
     */
    public function getSalary(): int;

    /**
     * @param int $salary
     */
    public function setSalary(int $salary): void;
}