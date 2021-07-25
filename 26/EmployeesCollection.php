<?php

/*
 * Задача 26.4
 * Скопируйте мой код класса Employee, затем самостоятельно реализуйте описанный класс EmployeesCollection, проверьте его работу.
 */

require_once 'Employee.php';

class EmployeesCollection
{
    /** @var Employee[]  */
    private array $employees = [];

    /**
     * @param Employee $employee
     */
    public function addIfNotAdded(Employee $employee)
    {
        if (!$this->exists($employee)) {
            $this->employees[] = $employee;
        }
    }

    /**
     * @param Employee $employee
     */
    public function addIfNotAddedStrict(Employee $employee)
    {
        if (!$this->exists($employee, true)) {
            $this->employees[] = $employee;
        }
    }

    /**
     * @return Employee[]
     */
    public function get(): array
    {
        return $this->employees;
    }

    public function dump()
    {
        var_dump($this->get());
        echo '==================';
    }

    /*
     * Задача 26.5
     * Упростите ваш класс EmployeesCollection с использованием функции in_array, проверьте его работу.
     */
    /**
     * @param $employee
     * @param bool $strict
     * @return bool
     */
    private function exists($employee, bool $strict = false): bool
    {
        return in_array($employee, $this->employees, $strict);
    }
}