<?php
//Maximum Subarray
//Given an integer array nums, find the contiguous subarray (containing at least one number)
//which has the largest sum and return its sum.
//
//A subarray is a contiguous part of an array.

//function maxSubArray($nums)
//{
//  Time Limit Exceeded ... Time complexity is O(n^2)


//    $largest = $nums[0];
//    for($i=0;$i<count($nums); $i++) {
//        $val = 0;
//        for ($j = $i; $j < count($nums); $j++) {
//            if($i!=$j)
//                $val += $nums[$j];
//            else
//                $val = $nums[$i];
//            if($val > $largest) $largest = $val;
//        }
//    }
//
//    return $largest;
//}

//Given an integer array nums, find the contiguous subarray (containing at least one number)
//which has the largest sum and return its sum.
//
//A subarray is a contiguous part of an array.

function maxSubArray($nums)
{
    $current_sum = $result[] = $nums[0];
    for($i=1; $i< count($nums); $i++) {
        if($nums[$i] > $current_sum+$nums[$i])
            $result[] = $current_sum = $nums[$i];
        else
            $result[] = $current_sum += $nums[$i];
    }

//    print_r($result);
    return max($result);
}

$nums = [-2,1,-3,4,-1,2,1,-5,4];

$result = maxSubArray($nums);

echo $result;