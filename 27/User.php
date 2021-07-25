<?php

/*
 * Задача 27.7
 * Сделайте класс User с публичным свойствами name (имя) и surname (фамилия).
 */
class User
{
    public string $name;
    public string $surname;

    public function __construct(string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }
}