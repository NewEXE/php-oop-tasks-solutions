<?php

/*
 * Задача 19.1
 * Не подсматривая в мой код реализуйте такие же классы User, Employee.
 */

class User
{
    private string $name;
    private int $age;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }
}