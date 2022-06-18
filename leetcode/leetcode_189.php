<?php

include_once "../core.php";

//https://leetcode.com/problems/rotate-array/

function rotate(&$nums, $k) {
    for($i=0;$i<count($nums);$i++) {
        $index = ($i + $k) % (count($nums));
        $new_array[$index] = $nums[$i];

    }
    $l = array();
    for($i=0;$i<count($nums); $i++) {
        $l[] = $new_array[$i];
    }
    $nums = $l;
}

$nums = [1,2,3,4,5,6,7];
$k = 3;
//$k = 8;
$ans = rotate($nums, $k);