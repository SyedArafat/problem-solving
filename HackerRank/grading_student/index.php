<?php

//https://www.hackerrank.com/challenges/grading/submissions/code/262310140

include_once "../../core.php";

function gradingStudents($grades) {
    $result = array();
    for($i = 0; $i<count($grades); $i++) {
        if($grades[$i] >37) {
            if(($grades[$i] + 1)%5 === 0) {
                $result[] = $grades[$i] +1;
            } elseif (($grades[$i] + 2)%5 === 0) {
                $result[] = $grades[$i] +2;
            } else {
                $result[] = $grades[$i];
            }
        } else
            $result[] = $grades[$i];
    }
    return $result;

}

$grades = [73,67,38,33];

$ans = gradingStudents($grades);

dd($ans);
