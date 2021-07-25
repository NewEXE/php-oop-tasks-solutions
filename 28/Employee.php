<?php

/*
 * Задача 28.3
 * Сделайте класс Employee (работник), в котором будут следующие свойства:
 * name (имя) и surname (фамилия). Пусть начальные значения этих свойств будут передаваться параметром в конструктор.
 */

require_once 'Post.php';

class Employee
{
    private string $name;
    private string $surname;
    private Post $post;

    /*
     * Задача 28.5
     * Пусть теперь третьим параметром конструктора будет передаваться должность работника, представляющая собой объект класса Post.
     * Укажите тип этого параметра в явном виде.
     */
    /**
     * Employee constructor.
     * @param string $name
     * @param string $surname
     * @param Post $post
     */
    public function __construct(string $name, string $surname, Post $post)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->post = $post;
    }

    /*
     * Задача 28.4
     * Сделайте геттеры и сеттеры для свойств name и surname.
     */

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
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return Post
     */
    public function getPost(): Post
    {
        return $this->post;
    }

    /*
     * Задача 28.9
     * Реализуйте в классе Employee метод changePost, который будет изменять должность работника на другую.
     * Метод должен принимать параметром объект класса Post. Укажите в методе тип принимаемого параметра в явном виде.
     */
    public function changePost(Post $post): void
    {
        $this->post = $post;
    }

}