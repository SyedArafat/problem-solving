<?php

//Find Smallest Letter Greater Than Target

//Given a characters array letters that is sorted in non-decreasing order and a character target,
// return the smallest character in the array that is larger than target.
//
//Note that the letters wrap around.
//
//For example, if target == 'z' and letters == ['a', 'b'], the answer is 'a'.

/**
 * @param String[] $letters
 * @param String $target
 * @return String
 */
function nextGreatestLetter($letters, $target) {
    for($i=0; $i<count($letters); $i++) {
        if($letters[$i] > $target) return $letters[$i];
        if($i === count($letters) - 1) return $letters[0];
    }
}

$letters = ["c","f","j"];
$target = "c";

$ans = nextGreatestLetter($letters, $target);
echo $ans;