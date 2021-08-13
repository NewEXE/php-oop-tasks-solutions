<?php
/*
 * Задача 39.3
 * Сделайте интерфейс iUser, который будет описывать юзера.
 * Предполагается, что у юзера будет имя и возраст и эти поля будут передаваться параметрами конструктора.
 * Пусть ваш интерфейс также задает то, что у юзера будут геттеры (но не сеттеры) для имени и возраста.
 */
interface iUser
{
    /**
     * @param string $name
     * @param int $age
     */
    public function __construct(string $name, int $age);

    public function getName(): string;

    public function getAge(): int;
}