<?php

//The majority element is the element that appears more than ⌊n / 2⌋ times. You may assume that the
//majority element always exists in the array.


/**
 * @param Integer[] $nums
 * @return Integer
 */
function majorityElement($nums) {
    $length = count($nums);
    if($length == 1) return $nums[0];
    sort($nums);
    for($i=0; $i<$length; $i++) {
        $count = 1;
        for($l=0; $l<=($length/2); $l++) {
            $j = $i+1;
            $target = $nums[$i];
            if($target == $nums[$j]) {
                $count++;
                if($count>=$length/2) {
                    return $target;
                }
                $i=$j;
            }
        }
    }

}
$nums = [3,2,3];

$ans = majorityElement($nums);
echo $ans;