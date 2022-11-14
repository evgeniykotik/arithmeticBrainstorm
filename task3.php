<?php

function task2($number, $ascending = true)
{
    $x = $number;
    $temp = null;
    while ($x != 0) {
        $templast = $x % 10;
        if ($temp === null) {
            $temp = $templast;
        } else {
            if ($ascending ? $temp > $templast : $temp < $templast) {
                $temp = $templast;
            } else {
                return false;
            }
        }
        $x = ($x - $templast) / 10;
    }
    return true;
}

function task3($min = 1000, $max = 9999)
{
    $numbers = [];
    for ($i = $min; $i <= $max; $i += 2) {
        if (task2($i) || task2($i, false)) {
            $numbers[] = $i;
        }
    }
    return $numbers;
}

var_dump(task3());