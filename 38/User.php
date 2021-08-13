<?php

/*
 * Задача 38.1
 * Пусть у нас дан такой интерфейс iUser (iUser.php).
 * Сделайте класс User, который будет реализовывать данный интерфейс.
 */

require_once 'iUser.php';

class User implements iUser
{
    private string $name;
    private int $age;

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param int $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }
}