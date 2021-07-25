<?php

/*
 * Задача 25.1
 * Сделайте класс Product (товар), в котором будут приватные свойства name (название товара), price (цена за штуку) и quantity.
 * Пусть все эти свойства будут доступны только для чтения.
 */

class Product
{
    private string $name;
    private int $price;
    private int $quantity;

    /**
     * Product constructor.
     * @param string $name
     * @param int $price
     * @param int $quantity
     */
    public function __construct(string $name, int $price, int $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    /*
     * Задача 25.2
     * Добавьте в класс Product метод getCost, который будет находить полную стоимость продукта (сумма умножить на количество).
     */

    /**
     * @return int|float
     */
    public function getCost(): int|float
    {
        return $this->price * $this->quantity;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }
}