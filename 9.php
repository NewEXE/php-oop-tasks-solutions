<?php
/*
 * Свойства только для чтения
 * http://code.mu/ru/php/book/oop/read-only-properties/
 */

// Задача 9.1
// Сделайте класс Employee, в котором будут следующие свойства: name (имя), surname (фамилия) и salary (зарплата).
class Employee
{
    private string $name;
    private string $surname;
    private int $salary;

    // Задача 9.2
    // Сделайте так, чтобы свойства name и surname были доступны только для чтения, а свойство salary - и для чтения, и для записи.
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
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

}