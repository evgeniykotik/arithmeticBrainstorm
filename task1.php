<?php

function task1($number, $max = 5)
{
    $x = $number;
    $count = 0;
    while ($x != 0) {
        $temp = $x % 10;
        if ($temp < $max) {
            $count++;
        }
        $x = ($x - $temp) / 10;
    }
    return $count;
}

print_r(task1(123478));