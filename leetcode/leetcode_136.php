<?php
//Single Number
//Given a non-empty array of integers nums, every element appears twice except for one. Find that single one.
//
//You must implement a solution with a linear runtime complexity and use only constant extra space.

/**
 * @param Integer[] $nums
 * @return Integer
 */
function singleNumber($nums) {
    $new_array = [];
    foreach ($nums as $num) {
        if(isset($new_array[$num]))
            $new_array[$num] = $new_array[$num]+1;
        else
            $new_array[$num] = 1;
    }
    foreach ($new_array as $key => $value)
        if($value === 1) return $key;

}

$nums = [4,1,2,1,2];
$ans = singleNumber($nums);
echo $ans;