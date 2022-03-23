<?php
//https://www.hackerrank.com/challenges/missing-numbers/problem

include_once "../../core.php";

function missingNumbers($arr, $brr) {
    $result = array();
    $arr = array_count_values($arr);
    $brr = array_count_values($brr);
    foreach ($brr as $key => $value) {
        if(!isset($arr[$key])) {
            $result[] = $key;
        } else {
            if($value > $arr[$key]) {
                $result[] = $key;
            }
        }
    }
    sort($result);
    return $result;

}

$arr = [203,204,205,206,207,208,203,204,205,206];
$brr = [203,204,204,205,206,207,205,208,203,206,205,206,204];

$ans = missingNumbers($arr, $brr);
dd($ans);