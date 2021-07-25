<?php

/*
 * Задача 19.4
 * Сделайте класс Driver (водитель), который будет наследовать от класса Employee.
 * Пусть новый класс добавляет следующие свойства: водительский стаж, категория вождения (A, B, C, D), а также геттеры и сеттеры к ним.
 */

require_once 'Employee.php';

class Driver extends Employee
{
    private int $drivingExperience;
    private string $drivingCategory;

    /**
     * @return int
     */
    public function getDrivingExperience(): int
    {
        return $this->drivingExperience;
    }

    /**
     * @param int $drivingExperience
     */
    public function setDrivingExperience(int $drivingExperience): void
    {
        $this->drivingExperience = $drivingExperience;
    }

    /**
     * @return string
     */
    public function getDrivingCategory(): string
    {
        return $this->drivingCategory;
    }

    /**
     * @param string $drivingCategory
     */
    public function setDrivingCategory(string $drivingCategory): void
    {
        $this->drivingCategory = $drivingCategory;
    }
}