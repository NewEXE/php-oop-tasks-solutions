<?php

/*
 * Задача 19.2
 * Не подсматривая в мой код реализуйте такой же класс Student, наследующий от класса User.
 */

require_once 'User.php';

class Student extends User
{
    private int $course;

    public function getCourse(): int
    {
        return $this->course;
    }

    public function setCourse(int $course): void
    {
        $this->course = $course;
    }
}