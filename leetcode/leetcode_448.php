<?php
// Find All Numbers Disappeared in an Array
//Given an array nums of n integers where nums[i] is in the range [1, n], return
//    an array of all the integers in the range [1, n] that do not appear in nums.

/**
 * @param Integer[] $nums
 * @return Integer[]
 */
function findDisappearedNumbers($nums) {
    $count = count($nums);
    $new_array = array_count_values($nums);
    $result = [];
    for($i=1;$i<=$count; $i++)
        if(!isset($new_array[$i])) $result[] = $i;

    return $result;
}

$nums = [4,3,2,7,8,2,3,1];
$ans = findDisappearedNumbers($nums);
print_r($ans);