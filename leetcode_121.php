<?php

//You are given an array prices where prices[i] is the price of a given stock on the ith day.
//You want to maximize your profit by choosing a single day to buy one stock and choosing a different
//day in the future to sell that stock.
//Return the maximum profit you can achieve from this transaction. If you cannot achieve any profit, return 0.

function maxProfit($prices) {
    $lowest = $prices[0];
    $profit = 0;
    for($i=1; $i<count($prices); $i++) {
        if($lowest > $prices[$i])
            $lowest = $prices[$i];
        else {
            $end = $prices[$i];
            $diff = $end - $lowest;
            if($diff > $profit)
                $profit = $diff;
        }
    }

    return $profit;
}

$prices = [7,1,5,3,6,4];

$result = maxProfit($prices);
echo $result;