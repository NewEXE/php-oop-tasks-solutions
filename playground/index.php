<?php
/*
 * For code testing
 */

$arr = [1, 2, 3];

removeFirstItem($arr);

var_dump($arr);

function removeFirstItem($arr)
{
    unset($arr[0]);
}