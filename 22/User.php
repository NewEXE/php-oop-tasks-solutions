<?php

/*
 * Задача 22.2
 * Сделайте класс User, в котором будут следующие свойства только для чтения: name (имя), surname (фамилия),
 * Начальные значения этих свойств должны устанавливаться в конструкторе. Сделайте также геттеры этих свойств.
 */

class User
{
    private string $name;
    private string $surname;
    private string $birthday;
    private int $age;

    /*
     * Задача 22.3
     * Сделайте так, чтобы третьим параметром в конструктор передавалась дата рождения работника в формате год-месяц-день
     * Запишите ее в свойство birthday. Сделайте геттер для этого свойства.
     */

    /**
     * User constructor.
     * @param string $name
     * @param string $surname
     * @param string $birthday In %y-%m-%d format
     */
    public function __construct(string $name, string $surname, string $birthday)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = $birthday;

        /*
         * Задача 22.5
         * Сделайте так, чтобы метод calculateAge вызывался в конструкторе объекта,
         * рассчитывал возраст пользователя и записывал его в приватное свойство age.
         * Сделайте геттер для этого свойства.
         */
        $this->age = $this->calculateAge($birthday);
    }

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
     * @return string In %y-%m-%d format
     */
    public function getBirthday(): string
    {
        return $this->birthday;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /*
     * Задача 22.4
     * Сделайте приватный метод calculateAge, который параметром будет принимать дату рождения,
     * а возвращать возраст с учетом того, был ли уже день рождения в этом году, или нет.
     */
    /**
     * @param string $birthday In %y-%m-%d format
     * @throws Exception
     * @return int
     */
    private function calculateAge(string $birthday): int
    {
        $birthdayDt = new DateTime($birthday);
        $today = new DateTime();
        return (int) $today->diff($birthdayDt)->format('%y');
    }
}