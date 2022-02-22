<?php
//Check if All Characters Have Equal Number of Occurrences

//Given a string s, return true if s is a good string, or false otherwise.
//
//A string s is good if all the characters that appear in s have the same number of
//occurrences (i.e., the same frequency).

/**
 * @param String $s
 * @return Boolean
 */
function areOccurrencesEqual($s) {
    $arr = array();
    for($i=0; $i<strlen($s); $i++) {
        if (isset($arr[$s[$i]])) $arr[$s[$i]] = $arr[$s[$i]]+ 1;
        else $arr[$s[$i]] = 1;

    }
    $arr = array_values($arr);
    $array_size = count($arr);
    for ($i = 0; $i < $array_size / 2; $i++)
        if ($arr[$i] != $arr[($array_size-1) - $i]) return false;

    return true;
}
$s = "abacbc";

$ans = areOccurrencesEqual($s);
print_r($ans);