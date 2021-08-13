<?php

require_once 'iUser.php';

/*
 * Задача 39.4
 * Сделайте класс User, реализующий интерфейс iUser.
 */
class User implements iUser
{
    private string $name;
    private int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}