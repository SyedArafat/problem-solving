<?php

//https://www.hackerrank.com/challenges/array-left-rotation/problem?isFullScreen=true
/*
 * Complete the 'rotateLeft' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER d
 *  2. INTEGER_ARRAY arr
 */

include_once "../../core.php";

function rotateLeft($d, $arr): array
{
    $new_array = array();
    for($i = 0; $i<count($arr); $i++) {
        if(($d+$i) === count($arr)) $d = -$i;
        $new_array[] = $arr[$d+$i];
    }
    return $new_array;
}

$fptr = fopen("output.txt", "w");
//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$input = file("input.txt");

$first_multiple_input = explode(' ', rtrim($input[0]));
//$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$d = intval($first_multiple_input[1]);

$arr_temp = rtrim($input[1]);
//$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = rotateLeft($d, $arr);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);
