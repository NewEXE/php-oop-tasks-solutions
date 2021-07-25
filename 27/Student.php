<?php

/*
 * Задача 27.2
 * Сделайте класс Student с публичными свойствами name (имя) и scholarship (стипендия).
 */

class Student
{
    public string $name;
    public int $scholarship;

    public function __construct(string $name, int $scholarship)
    {
        $this->name = $name;
        $this->scholarship = $scholarship;
    }
}