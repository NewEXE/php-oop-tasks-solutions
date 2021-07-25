<?php

// Задача 17.1
// Не подсматривая в мой код самостоятельно реализуйте такой же класс Arr, методы которого будут вызываться в виде цепочки.
class Arr
{
    /**
     * @var int[]
     */
    private array $numbers = [];

    /**
     * @param $number
     * @return $this
     */
    public function add($number): self
    {
        $this->numbers[] = $number;

        return $this;
    }

    /**
     * @return float|int
     */
    public function getSum(): float|int
    {
        return array_sum($this->numbers);
    }
    
    // Задача 17.2
    // Добавьте в класс Arr еще один метод append, который параметром будет принимать массив чисел
    // и добавлять эти числа в конец массива, хранящегося в объекте.
    // Предполагается, что методы add и append можно будет использовать в любом порядке:
    //
    // echo (new Arr)->add(1)->append([2, 3, 4])->add(5)->getSum();
    /**
     * @param int[] $numbers
     * @return $this
     */
    public function append(array $numbers): self
    {
        $this->numbers = array_merge($this->numbers, $numbers);

        return $this;
    }
}