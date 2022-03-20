<?php

//Minimum Number of Steps to Make Two Strings Anagram
//
//You are given two strings of the same length s and t. In one step you can choose any character of t and replace it with another character.
//
//Return the minimum number of steps to make t an anagram of s.
//
//An Anagram of a string is a string that contains the same characters with a different (or the same) ordering.
//
//
//
//Example 1:
//
//Input: s = "bab", t = "aba"
//Output: 1
//Explanation: Replace the first 'a' in t with b, t = "bba" which is anagram of s.

/**
 * @param String $s
 * @param String $t
 * @return Integer
 */
function minSteps($s, $t) {
    $sa = str_split($s);
    $ta = str_split($t);
    $sa = array_count_values($sa);
    $ta = array_count_values($ta);
    $count = 0;
    foreach ($sa as $key => $value) {
        if(isset($ta[$key])) {
            if($ta[$key] !== $value) {
                $c = $value - $ta[$key];
                if($c > 0)
                    $count += $c;
            }
        }
        else
            $count += $value;
    }

    return $count;
}

$s = "friend";
$t = "family";
$ans = minSteps($s, $t);
echo $ans;