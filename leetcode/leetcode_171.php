<?php

//Given a string columnTitle that represents the column title as appear in an Excel sheet,
//return its corresponding column number.
//
//For example:
//
//A -> 1
//B -> 2
//C -> 3
//...
//Z -> 26
//AA -> 27
//AB -> 28
//...

class leetcode_171 {

    function getNumber($letter) {
        $number = $letter;
        if($number == "A") return 1;
        elseif($number == "B") return 2;
        elseif($number == "C") return 3;
        elseif($number == "D") return 4;
        elseif($number == "E") return 5;
        elseif($number == "F") return 6;
        elseif($number == "G") return 7;
        elseif($number == "H") return 8;
        elseif($number == "I") return 9;
        elseif($number == "J") return 10;
        elseif($number == "K") return 11;
        elseif($number == "L") return 12;
        elseif($number == "M") return 13;
        elseif($number == "N") return 14;
        elseif($number == "O") return 15;
        elseif($number == "P") return 16;
        elseif($number == "Q") return 17;
        elseif($number == "R") return 18;
        elseif($number == "S") return 19;
        elseif($number == "T") return 20;
        elseif($number == "U") return 21;
        elseif($number == "V") return 22;
        elseif($number == "W") return 23;
        elseif($number == "X") return 24;
        elseif($number == "Y") return 25;
        elseif($number == "Z") return 26;
    }

    /**
     * @param String $columnTitle
     * @return Integer
     */
    function titleToNumber($columnTitle) {
        $number = 0;
        $columnTitle = strrev($columnTitle);
        for($i=0;$i<strlen($columnTitle); $i++) {
            $number = $number + ($this->getNumber($columnTitle[$i]) * pow(26,$i));
        }

        return $number;

    }
}

$class = new leetcode_171();
$columnTitle = "ZY";
$ans = $class->titleToNumber($columnTitle);

echo $ans;