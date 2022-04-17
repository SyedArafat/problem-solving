<?php

//https://leetcode.com/problems/plus-one/

include_once "../core.php";

class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $preResult = '';
        for($i = 0; $i<count($digits);$i++) {
            $preResult .= $digits[$i];
        }
        $result = bcadd($preResult, 1);
        return array_map('intval', str_split($result));

    }
}

$digits = [1,2,3];
(new Solution())->plusOne($digits);