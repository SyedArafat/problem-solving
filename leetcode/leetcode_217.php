<?php

//Given an integer array nums, return true if any value appears at least twice in the array, and return false if
//every element is distinct.

/**
 * @param Integer[] $nums
 * @return Boolean
 */
function containsDuplicate($nums) {
    $length = count($nums);
    $new_numbers = sort($nums);
    for($i=0,$j=1;$i<$length,$j<$length;$i++,$j++) {
        if($nums[$i] == $nums[$j]) return true;
    }
    return false;
}

$nums = [1,2,3,4];

$ans = containsDuplicate($nums);

echo $ans;