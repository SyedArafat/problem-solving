<?php
//Valid Mountain Array

//Given an array of integers arr, return true if and only if it is a valid mountain array.
//
//Recall that arr is a mountain array if and only if:
//
//    arr.length >= 3
//There exists some i with 0 < i < arr.length - 1 such that:
//arr[0] < arr[1] < ... < arr[i - 1] < arr[i]
//arr[i] > arr[i + 1] > ... > arr[arr.length - 1]

/**
 * @param Integer[] $arr
 * @return Boolean
 */
function validMountainArray($arr) {
    $rev = 0;
    for ($i=0; $i<count($arr); $i++) {
        if(!isset($arr[$i+1])) {
            if(isset($arr[$i-1])) {
                if($arr[$i-1] > $arr[$i]) return true;
            }
            return false;
        }
        if($rev != 1 && $arr[$i]<$arr[$i+1])
            continue;
        else
            if($i!=0 && $arr[$i]>$arr[$i+1]) {
                $rev = 1;
                continue;
            }
        return false;
    }
    return true;

}

$arr = [0,3,2,1];
$ans = validMountainArray($arr);
echo $ans;