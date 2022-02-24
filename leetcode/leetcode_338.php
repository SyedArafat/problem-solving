<?php

//Given an integer n, return an array ans of length n + 1 such that for each i (0 <= i <= n),
// ans[i] is the number of 1's in the binary representation of i.
//
//
//
//Example 1:
//
//Input: n = 2
//Output: [0,1,1]
//Explanation:
//0 --> 0
//1 --> 1
//2 --> 10

/**
 * @param Integer $n
 * @return Integer[]
 */
function countBits($n) {
    $result = array();
    for($i= 0; $i<=$n; $i++) {
        $sum = $i;
        $num = $i & 1;
        if($num !== 0) {
            $result[] = $result[$i-1] + 1;
            continue;
        }
        $count = 0;
        while ($sum != 0) {
            if ($sum % 2 === 1) $count++;
            $sum = (int)$sum / 2;
        }
        $result[] = $count;
    }
    return $result;

}

$n=10;
$result = countBits($n);

print_r($result);