<?php

function lengthOfNum(...$num)
{
    $i = 0;
    while (isset($num[$i])) {
        $i++;
    }
    return $i;
}

function task4(...$num)
{
    $lenghOfNum = lengthOfNum(...$num);
    $result = [];
    for ($w = 0; $w < $lenghOfNum; $w++) {
        for ($x = 0; $x < $lenghOfNum; $x++) {
            for ($y = 0; $y < $lenghOfNum; $y++) {
                for ($z = 0; $z < $lenghOfNum; $z++) {
                    if ($w != $x && $num[$w] != 0 && $w != $y && $w != $z && $x != $y && $x != $z && $y != $z) {
                        $result[] = $num[$w] * (10 ** 3) + $num[$x] * (10 ** 2) + $num[$y] * (10 ** 1) + $num[$z];
                    }
                }
            }
        }
    }
    return $result;
}

var_dump(task4(0, 2, 3, 7));