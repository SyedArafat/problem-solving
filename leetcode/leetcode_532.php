<?php
//K-diff Pairs in an Array
//Given an array of integers nums and an integer k, return the number of unique k-diff pairs in the array.
//
//A k-diff pair is an integer pair (nums[i], nums[j]), where the following are true:
//
//0 <= i, j < nums.length
//i != j
//nums[i] - nums[j] == k
//Notice that |val| denotes the absolute value of val.

/**
 * @param Integer[] $nums
 * @param Integer $k
 * @return Integer
 */
function findPairs($nums, $k) {
    $result = [];
    for($i=0;$i<count($nums); $i++)
    {
        $target = $nums[$i] - $k;
        for($j=0;$j<count($nums);$j++)
            if($i!=$j)
                if($target === $nums[$j])
                    $result[$nums[$i]] = $nums[$j];


    }

    return count($result);
}

$nums = [3,1,4,1,5];
$k = 2;
$ans = findPairs($nums,$k);
echo $ans;