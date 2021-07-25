<?php

/*
 * Задача 25.3
 * Сделайте класс Cart (корзина). Данный класс будет хранить список продуктов (объектов класса Product) в виде массива.
 * Пусть продукты хранятся в свойстве products.
 */

require_once 'Product.php';

class Cart
{
    /** @var Product[]  */
    private array $products = [];

    /*
     * Задача 25.4
     * Реализуйте в классе Cart метод add для добавления продуктов.
     */

    /**
     * @param Product $product
     */
    public function add(Product $product)
    {
        $this->products[] = $product;
    }

    /*
     * Задача 25.5
     * Реализуйте в классе Cart метод remove для удаления продуктов.
     * Метод должен принимать параметром название удаляемого продукта.
     */
    /**
     * @param string $productName
     */
    public function remove(string $productName)
    {
        foreach ($this->products as $pIndex => $product) {
            if ($product->getName() === $productName) {
                unset($this->products[$pIndex]);
            }
        }
    }

    /*
     * Задача 25.6
     * Реализуйте в классе Cart метод getTotalCost, который будет находить суммарную стоимость продуктов.
     */

    /**
     * @return int|float
     */
    public function getTotalCost(): int|float
    {
        $totalCost = 0;

        foreach ($this->products as $product) {
            $totalCost += $product->getCost();
        }

        return $totalCost;
    }

    /*
     * Задача 25.7
     * Реализуйте в классе Cart метод getTotalQuantity, который будет находить суммарное количество продуктов
     * (то есть сумму свойств quantity всех продуктов).
     */

    /**
     * @return int|float
     */
    public function getTotalQuantity(): int|float
    {
        $totalQuantity = 0;

        foreach ($this->products as $product) {
            $totalQuantity += $product->getQuantity();
        }

        return $totalQuantity;
    }

    /*
     * Задача 25.8
     * Реализуйте в классе Cart метод getAvgPrice, который будет находить среднюю стоимость продуктов
     * (суммарная стоимость делить на количество всех продуктов).
     */

    /**
     * @return float|int
     */
    public function getAvgPrice(): int|float
    {
        return $this->getTotalCost() / $this->getTotalQuantity();
    }
}