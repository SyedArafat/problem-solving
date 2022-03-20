<?php
//Peak Index in a Mountain Array

//Let's call an array arr a mountain if the following properties hold:
//
//arr.length >= 3
//There exists some i with 0 < i < arr.length - 1 such that:
//arr[0] < arr[1] < ... arr[i-1] < arr[i]
//arr[i] > arr[i+1] > ... > arr[arr.length - 1]
//Given an integer array arr that is guaranteed to be a mountain, return any i such
// that arr[0] < arr[1] < ... arr[i - 1] < arr[i] > arr[i + 1] > ... > arr[arr.length - 1].


/**
 * @param Integer[] $arr
 * @return Integer
 */
//function peakIndexInMountainArray($arr) {
//    for ($i= 0; $i<count($arr); $i++)
//        if($arr[$i]>$arr[$i+1])
//            return $i;
//
//}

function peakIndexInMountainArray($arr) {
    $first = 0;
    $last = count($arr) - 1;
    $middle = (int)(($first+$last)/2);
    while(1) {
        if($arr[$middle]<$arr[$middle+1]) {
            $first = $middle + 1;
        } elseif ($arr[$middle] < $arr[$middle-1]) {
            $last = $middle -1;
        } else
            return $middle;
        $middle = (int)(($first+$last)/2);
//        var_dump($arr[$middle]);
    }

}

$arr = [24,69, 70,100,99,79,78,67,36,26,19];
$ans = peakIndexInMountainArray($arr);
echo $ans;
