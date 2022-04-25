<?php

//https://leetcode.com/problems/first-bad-version/submissions/

/* The isBadVersion API is defined in the parent class VersionControl.
      public function isBadVersion($version){} */

class Solution extends VersionControl {
    /**
     * @param Integer $n
     * @return Integer
     */
    function firstBadVersion($n) {
        $first = 1;
        $last = $n;
        $result = $n;
        while($first<=$last) {
            $mid=floor(($first+$last)/2);
            if($this->isBadVersion($mid)) {
                $result = $mid;
                $last = $mid-1;
            } else
                $first = $mid+1;

        }

        return $result;

    }
}