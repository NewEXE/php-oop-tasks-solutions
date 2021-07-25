<?php

require_once 'User.php';

class Student extends User
{
    private int $course;

    public function setAge($age): void
    {
        if ($age <= 25) {
            parent::setAge($age);
        }
    }

    public function getCourse(): int
    {
        return $this->course;
    }

    public function setCourse(int $course): void
    {
        $this->course = $course;
    }

    // Задача 21.2
    // Добавьте в класс Student метод setName, в котором будет выполняться проверка того, что длина имени более 3-х символов и менее 10 символов.
    // Пусть метод setName класса Student использует метод setName своего родителя, чтобы выполнить часть проверки.
    public function setName(string $name): void
    {
        if (mb_strlen($name) < 10) {
            parent::setName($name);
        }
    }
}