<?php

function task5($number)
{
    $lengthOfNumber = 0;
    $x = $number;
    while ($x != 0) {
        $temp = $x % 10;
        $lengthOfNumber++;
        $x = ($x - $temp) / 10;
    }
    if ($lengthOfNumber % 2 != 0) {
        return false;
    } else {
        $halfLengthOfNumber = $lengthOfNumber / 2;
        $numberSecondHalf = $number % (10 ** $halfLengthOfNumber);
        $numberFirstHalf = ($number - $numberSecondHalf) / (10 ** $halfLengthOfNumber);
        $temp = $numberFirstHalf;
        $counterRazrad = $halfLengthOfNumber - 1;
        $resultFirst = 0;
        while ($temp != 0) {
            $ostatok = $temp % 10;
            $resultFirst += $ostatok * (10 ** $counterRazrad);
            $counterRazrad--;
            $temp = ($temp - $ostatok) / 10;
        }
        return $numberSecondHalf == $resultFirst;
    }
}

var_dump(task5(12344321));
