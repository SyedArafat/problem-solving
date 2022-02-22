<?php
//Add Digits
//Given an integer num, repeatedly add all its digits until the result has only one digit, and return it.

/**
 * @param Integer $num
 * @return Integer
 */
function addDigits($num) {
    $num = (string) $num;
    while(1) {
        $sum = 0;
        for ($i = 0; $i < strlen($num); $i++)
            $sum += (int)$num[$i];

        $num = (string)($sum);
        if (strlen($num) === 1) return $num;
    }
}

$num = 38;
$ans = addDigits($num);
echo $ans;