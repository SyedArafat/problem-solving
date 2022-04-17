<?php

//https://leetcode.com/problems/contains-duplicate-ii/

include_once "../core.php";
/**
 * @param Integer[] $nums
 * @param Integer $k
 * @return Boolean
 */
function containsNearbyDuplicate($nums, $k) {
    $hash = [];
    foreach ($nums as $key => $value) {
        if(isset($hash[$value]) && abs($hash[$value] - $key) <=$k) return true;
        else $hash[$value] = $key;
    }
    return false;
}

$nums = [1,2,3,1,2,3];
$k = 2;
$ans = containsNearbyDuplicate($nums, $k);
dd($ans);