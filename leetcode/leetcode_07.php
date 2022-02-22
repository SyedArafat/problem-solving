<?php
//Reverse Integer

//Given a signed 32-bit integer x, return x with its digits reversed. If reversing x causes the value
// to go outside the signed 32-bit integer range [-231, 231 - 1], then return 0.
//
//Assume the environment does not allow you to store 64-bit integers (signed or unsigned).
//
//
//
//Example 1:
//
//Input: x = 123
//Output: 321
//Example 2:
//
//Input: x = -123
//Output: -321
//Example 3:
//
//Input: x = 120
//Output: 21

/**
 * @param Integer $x
 * @return Integer
 */
function reverse($x) {
    $minus = 0;
    $reverse = '';
    if($x<0) {
        $x = -$x;
        $minus = 1;
    }
    $result =$x;
    while ($result !=0) {
        $left = $result % 10;
        $result = (int)($result / 10);
        $reverse .=$left;
    }
    if($minus) $reverse = - $reverse;
    $reverse = (int)($reverse);
    if(pow(-2, 31) <=$reverse && $reverse <=pow(2, 31)-1) return $reverse;
    return 0;

}

$x = 123;
$ans = reverse($x);
echo $ans;