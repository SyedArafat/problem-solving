<?php
//Isomorphic Strings


//Given two strings s and t, determine if they are isomorphic.
//
//Two strings s and t are isomorphic if the characters in s can be replaced to get t.
//
//All occurrences of a character must be replaced with another character while preserving the order of characters.
//No two characters may map to the same character, but a character may map to itself.

/**
 * @param String $s
 * @param String $t
 * @return Boolean
 */
function isIsomorphic($s, $t) {
    $str1 = '';
    $str2 = '';
    $arr1 = array();
    $arr2 = array();
    for($i= 0; $i< strlen($s); $i++)
        $arr1[$s[$i]] = $t[$i];

    for ($j=0; $j<strlen($s); $j++)
        $str1 .= $arr1[$s[$j]];

    if($str1 === $t) {
        for($i= 0; $i< strlen($s); $i++)
            $arr2[$t[$i]] = $s[$i];

        for ($j=0; $j<strlen($t); $j++)
            $str2 .= $arr2[$t[$j]];

        return ($str2 === $s);
    }

    return false;

}

$s = "egg";
$t = "add";

$ans = isIsomorphic($s, $t);

echo $ans;

