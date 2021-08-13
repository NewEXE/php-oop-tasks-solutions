<?php

/*
 * Задача 41.1
 * Сделайте интерфейс Figure3d (трехмерная фигура),
 * который будет иметь метод getVolume (получить объем) и метод getSurfaceSquare (получить площадь поверхности).
 */

interface Figure3d
{
    public function getVolume(): int|float;

    public function getSurfaceSquare(): int|float;
}