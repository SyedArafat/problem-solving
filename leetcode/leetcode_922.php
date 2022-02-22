<?php
//Sort Array By Parity II

//Given an array of integers nums, half of the integers in nums are odd, and the other half are even.
//
//Sort the array so that whenever nums[i] is odd, i is odd, and whenever nums[i] is even, i is even.
//
//Return any answer array that satisfies this condition.

/**
 * @param Integer[] $nums
 * @return Integer[]
 */
function sortArrayByParityII($nums) {
    $even_array = array();
    $odd_array = array();
    $final_array = array();
    for ($i = 0; $i< count($nums); $i++) {
        if($nums[$i] % 2 === 0) $even_array[] = $nums[$i];
        else $odd_array[] = $nums[$i];
    }
    for ($i = 0; $i < count($nums)/2; $i++) {
        $final_array[] = $even_array[$i];
        $final_array[] = $odd_array[$i];

    }
    return $final_array;

}

$nums = [4,2,5,7];
$ans = sortArrayByParityII($nums);
print_r($ans);