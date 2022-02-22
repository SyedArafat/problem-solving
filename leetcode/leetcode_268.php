<?php
//Missing Number
//Given an array nums containing n distinct numbers in the range [0, n], return
//    the only number in the range that is missing from the array.

/**
 * @param Integer[] $nums
 * @return Integer
 */
function missingNumber($nums) {
    $count = count($nums);
    $new_array = array_count_values($nums);
    for($i=0;$i<=$count; $i++)
        if(!isset($new_array[$i])) return $i;

}

$nums = [3,0,1];
$ans = missingNumber($nums);
echo $ans;