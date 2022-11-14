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

var_dump(task2(12348));
