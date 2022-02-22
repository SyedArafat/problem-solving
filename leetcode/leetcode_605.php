<?php
//Can Place Flowers

//You have a long flowerbed in which some of the plots are planted, and some are not.
//However, flowers cannot be planted in adjacent plots.
//
//Given an integer array flowerbed containing 0's and 1's, where 0 means empty and 1
//means not empty, and an integer n, return if n new flowers can be planted in the flowerbed
//without violating the no-adjacent-flowers rule.

/**
 * @param Integer[] $flowerbed
 * @param Integer $n
 * @return Boolean
 */
function canPlaceFlowers($flowerbed, $n) {
    $count = 0;
    for($i = 0; $i<count($flowerbed); $i++) {
        if($flowerbed[$i] === 0)
            if(!isset($flowerbed[$i+1]) || $flowerbed[$i+1] === 0)
                if(!isset($flowerbed[$i-1]) || $flowerbed[$i-1] === 0) {
                    $count++;
                    $flowerbed[$i] = 1;
                }


    }
    return $n <= $count;
}

$flowerbed = [1,0,0,0,1];
$n = 1;
$ans = canPlaceFlowers($flowerbed, $n);
echo $ans;