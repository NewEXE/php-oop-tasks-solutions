<?php

/*
 * Задача 40.1
 * Сделайте интерфейс iUser с методами getName, setName, getAge, setAge.
 */
interface iUser
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     */
    public function setName(string $name): void;

    /**
     * @return int
     */
    public function getAge(): int;

    /**
     * @param int $age
     */
    public function setAge(int $age): void;
}