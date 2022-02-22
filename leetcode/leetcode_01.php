<?php

//Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
//
//You may assume that each input would have exactly one solution, and you may not use the same element twice.
//
//You can return the answer in any order.

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
function twoSum($nums, $target) {
    for ($i=0; $i<count($nums); $i++)
        for ($j=0; $j<count($nums); $j++)
            if($i !=$j)
                if($target === ($nums[$i] + $nums[$j]))
                    return [$i, $j];

}

$nums = [2,7,11,15];
$target = 9;

$ans = twoSum($nums, $target);

print_r($ans);