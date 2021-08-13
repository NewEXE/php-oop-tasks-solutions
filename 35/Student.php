<?php

require_once 'User.php';

class Student extends User
{
    private int $scholarship = 0;

    /**
     * @return int
     */
    public function getScholarship(): int
    {
        return $this->scholarship;
    }

    /**
     * @param int $scholarship
     */
    public function setScholarship(int $scholarship)
    {
        $this->scholarship = $scholarship;
    }

    /**
     * @param int $value
     */
    public function increaseRevenue(int $value): void
    {
        $this->scholarship += $value;
    }

    public function decreaseRevenue(int $value): void
    {
        $this->scholarship = max($this->scholarship - $value, 0);
    }
}