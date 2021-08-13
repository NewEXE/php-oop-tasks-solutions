<?php

/*
 * Задача 35.1
 * Самостоятельно, не подсматривая в мой код, реализуйте такой же абстрактный класс User,
 * а также классы Employee и Student, наследующие от него.
 */
abstract class User
{
    private string $name;

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
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /*
     * Задача 35.2
     * Добавьте в ваш класс User такой же абстрактный метод increaseRevenue.
     * Напишите реализацию этого метода в классах Employee и Student.
     */
    /**
     * @param int $value
     * @return void
     */
    abstract public function increaseRevenue(int $value): void;

    /*
     * Задача 35.3
     * Добавьте также в ваш класс User абстрактный метод decreaseRevenue (уменьшить зарплату).
     * Напишите реализацию этого метода в классах Employee и Student.
     */
    /**
     * @param int $value
     * @return void
     */
    abstract public function decreaseRevenue(int $value): void;
}