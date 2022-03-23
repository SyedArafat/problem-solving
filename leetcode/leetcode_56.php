<?php

//https://leetcode.com/problems/merge-intervals/

//Given an array of intervals where intervals[i] = [starti, endi], merge all overlapping intervals,
// and return an array of the non-overlapping intervals that cover all the intervals in the input.
//
//
//
//Example 1:
//
//Input: intervals = [[1,3],[2,6],[8,10],[15,18]]
//Output: [[1,6],[8,10],[15,18]]
//Explanation: Since intervals [1,3] and [2,6] overlaps, merge them into [1,6].


/**
 * @param Integer[][] $intervals
 * @return Integer[][]
 */
function merge($intervals): array
{
    sort($intervals);
    $result = array();
    $j=0;
    for($i=0; $i<count($intervals); $i++) {
        if(count($result) === 0) {
            $result[$j] = $intervals[$i];
        } else {
            if($intervals[$i][0] <= $result[$j-1][1]) {
                $min = min($intervals[$i][0], $intervals[$i][1], $result[$j - 1][0], $result[$j - 1][1]);
                $max = max($intervals[$i][0], $intervals[$i][1], $result[$j - 1][0], $result[$j - 1][1]);
                $result[$j-1][0] = $min;
                $result[$j-1][1] = $max;
                continue;
            } else {
                $result[$j] = $intervals[$i];
            }
        }
        $j++;
    }
    return $result;
}

$intervals = [[1,3],[2,6],[8,10],[15,18]];
$ans = merge($intervals);