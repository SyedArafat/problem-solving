<?php
//Longest Common Prefix

//Write a function to find the longest common prefix string amongst an array of strings.
//
//If there is no common prefix, return an empty string "".

/**
 * @param String[] $strs
 * @return String
 */
function longestCommonPrefix($strs) {
    $match = $strs[0];
    $final_count = strlen($strs[0]);
    for($i=1; $i<count($strs); $i++) {
        $count = 0;
        for ($j=0;$j<strlen($strs[$i]); $j++) {
            if (isset($match[$j]) && $match[$j] == $strs[$i][$j])
                $count++;
            else break;
        }

        if($count < $final_count) $final_count = $count;

    }
    return (substr($match, 0, $final_count));

}

$strs = ["flower","flow","flight"];
$ans = longestCommonPrefix($strs);
echo $ans;