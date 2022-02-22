<?php
//Palindrome Number
//Given an integer x, return true if x is palindrome integer.
//
//An integer is a palindrome when it reads the same backward as forward.
//
//For example, 121 is a palindrome while 123 is not.

/**
 * @param Integer $x
 * @return Boolean
 */
function isPalindrome($x) {
    $result = '';
    $original = $x;
    while ($x > 0) {
        $new_int = $x % 10;
        $x = (int) ($x / 10);
        $result .=$new_int;
    }

    return $original == (int) $result;
}

$x = 121;
$ans = isPalindrome($x);
print_r($ans);