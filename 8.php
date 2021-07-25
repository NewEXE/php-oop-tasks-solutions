<?php
/*
 * Работа с геттерами и сеттерами
 * http://code.mu/ru/php/book/oop/getters-and-setters/
 */

// Задача 8.1
// Сделайте класс Employee, в котором будут следующие private свойства: name (имя), age (возраст) и salary (зарплата).
class Employee
{
    private string $name;
    private int $age;
    private int $salary;

    // Задача 8.2
    // Сделайте геттеры и сеттеры для всех свойств класса Employee.
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        if (!$this->isAgeCorrect($age)) {
            return;
        }

        $this->age = $age;
    }

    // Задача 8.4
    // Пусть зарплата наших работников хранится в долларах. Сделайте так, чтобы геттер getSalary добавлял в конец числа с зарплатой значок доллара.
    // Говоря другими словами в свойстве salary зарплата будет хранится просто числом, но геттер будет возвращать ее с долларом на конце.
    /**
     * @return string
     */
    public function getSalary(): string
    {
        return $this->salary . '$';
    }

    /**
     * @param int $salary
     */
    public function setSalary(int $salary): void
    {
        $this->salary = $salary;
    }

    // Задача 8.3
    //
    // Дополните класс Employee приватным методом isAgeCorrect, который будет проверять возраст на корректность (от 1 до 100 лет).
    // Этот метод должен использоваться в сеттере setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться).
    private function isAgeCorrect(int $age): bool
    {
        return $age > 1 && $age < 100;
    }
}