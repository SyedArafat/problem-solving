<?php

//Rank Transform of an Array
//
//Given an array of integers arr, replace each element with its rank.
//
//The rank represents how large the element is. The rank has the following rules:
//
//Rank is an integer starting from 1.
//The larger the element, the larger the rank. If two elements are equal, their rank must be the same.
//Rank should be as small as possible.
//
//
//Example 1:
//
//Input: arr = [40,10,20,30]
//Output: [4,1,2,3]
//Explanation: 40 is the largest element. 10 is the smallest. 20 is the second smallest. 30 is the third smallest.


/**
 * @param Integer[] $arr
 * @return Integer[]
 */
function arrayRankTransform($arr) {
    $new_array = $arr;
    $rank_array = array();
    sort($new_array);
    $count = 0;
    foreach ($new_array as $a)
        if(!isset($rank_array[$a]))
            $rank_array[$a] = ++$count;

    return array_map(function ($a) use ($rank_array) {
        return $rank_array[$a];
    }, $arr);

}