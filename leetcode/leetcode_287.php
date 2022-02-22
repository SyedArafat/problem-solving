<?php
//Find the Duplicate Number
//Given an array of integers nums containing n + 1 integers where each integer is in the range [1, n]
//inclusive.
//
//There is only one repeated number in nums, return this repeated number.
//
//You must solve the problem without modifying the array nums and uses only constant extra space.

/**
 * @param Integer[] $nums
 * @return Integer
 */
function findDuplicate($nums) {
    $new_array = array_count_values($nums);
    foreach ($new_array as $key => $value)
        if($value > 1) return $key;

}

$nums = [1,3,4,2,2];
$ans = findDuplicate($nums);
echo $ans;