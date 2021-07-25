<?php

// Задача 17.3
// Сделайте класс User, у которого будут приватные свойства surname (фамилия), name (имя) и patronymic (отчество).
// Эти свойства должны задаваться с помощью соответствующих сеттеров.
// Сделайте так, чтобы эти сеттеры вызывались цепочкой в любом порядке,
// а самым последним методом в цепочке можно было вызвать метод getFullName,
// который вернет ФИО юзера (первую букву фамилии, имени и отчества).
class User
{
    private string $surname;
    protected string $name;
    private string $patronymic;

    /**
     * @param string $surname
     * @return User
     */
    public function setSurname(string $surname): User
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * @param string $name
     * @return User
     */
    public function setName(string $name): User
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $patronymic
     * @return User
     */
    public function setPatronymic(string $patronymic): User
    {
        $this->patronymic = $patronymic;

        return $this;
    }

    public function getFullName()
    {
        return
            mb_substr($this->surname, 0, 1) .
            mb_substr($this->name, 0, 1) .
            mb_substr($this->patronymic, 0, 1);
    }
}