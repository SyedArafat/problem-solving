<?php
include_once "core.php";
//Remove Element
//https://leetcode.com/problems/remove-element/
/**
 * @param Integer[] $nums
 * @param Integer $val
 * @return Integer
 */
function removeElement(&$nums, $val) {
    $count = (count($nums));
    for($i=0; $i<$count;$i++) {
        if($nums[$i] === $val)
            unset($nums[$i]);
    }
    return count($nums);
}

$nums = [0,1,2,2,3,0,4,2];
$val = 2;
$ans = removeElement($nums, $val);
echo $ans;
//Output: 5, nums = [0,1,4,0,3,_,_,_]