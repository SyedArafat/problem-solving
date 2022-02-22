<?php

//Given a string s and a character c that occurs in s, return an array of integers answer where answer.
//length == s.length and answer[i] is the distance from index i to the closest occurrence of character c in s.
//
//The distance between two indices i and j is abs(i - j), where abs is the absolute value function.

/**
 * @param String $s
 * @param String $c
 * @return Integer[]
 */
function shortestToChar($s, $c) {
    $cIndex = [];
    $result = [];
    for($i = 0; $i< strlen($s); $i++) {
        if ($s[$i] == $c) $cIndex[] = $i;
    }
    for($i = 0; $i< strlen($s); $i++) {
        for ($j = 0; $j< count($cIndex); $j++) {
            $r = abs($i - $cIndex[$j]);
            if(!isset($result[$i])) $result[$i] = $r;
            elseif ($result[$i] > $r) $result[$i] = $r;
        }
    }

    return $result;
}
$s = "loveleetcode";
$c = "e";
$ans = shortestToChar($s, $c);
print_r($ans);