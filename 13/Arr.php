<?php

// Задача 13.1
// Реализуйте класс Arr, похожий на тот, который я реализовал выше.
// В отличие от моего класса метод add вашего класса параметром должен принимать массив чисел.
// Все числа из этого массива должны добавляться в конец массива $this->numbers.
class Arr
{
    /**
     * @var int[]
     */
    private array $numbers = [];

    /**
     * @param int[]
     */
    public function add(array $numbers): void
    {
        $this->numbers = array_merge($this->numbers, $numbers);
    }

    /**
     * @param int[]
     */
    public function addBefore(array $numbers): void
    {
        $this->numbers = array_merge($numbers, $this->numbers);
    }

    // Задача 13.2
    // Вместо метода getSum реализуйте метод getAvg, который будет находить среднее арифметическое переданных чисел.
    /**
     * @return float|int
     */
    public function getAvg(): float|int
    {
        return array_sum($this->numbers) / count($this->numbers);
    }
}