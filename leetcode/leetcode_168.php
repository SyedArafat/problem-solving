<?php

//Given an integer columnNumber, return its corresponding column title as it appears in an Excel sheet.
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

class leetcode_168 {

    function getLetter($number)
    {
        if($number == 1) return "A";
        elseif($number == 2) return "B";
        elseif($number == 3) return "C";
        elseif($number == 4) return "D";
        elseif($number == 5) return "E";
        elseif($number == 6) return "F";
        elseif($number == 7) return "G";
        elseif($number == 8) return "H";
        elseif($number == 9) return "I";
        elseif($number == 10) return "J";
        elseif($number == 11) return "K";
        elseif($number == 12) return "L";
        elseif($number == 13) return "M";
        elseif($number == 14) return "N";
        elseif($number == 15) return "O";
        elseif($number == 16) return "P";
        elseif($number == 17) return "Q";
        elseif($number == 18) return "R";
        elseif($number == 19) return "S";
        elseif($number == 20) return "T";
        elseif($number == 21) return "U";
        elseif($number == 22) return "V";
        elseif($number == 23) return "W";
        elseif($number == 24) return "X";
        elseif($number == 25) return "Y";
        elseif($number == 26 || $number == 0) return "Z";
    }

    /**
     * @param Integer $columnNumber
     * @return String
     */
    function convertToTitle($columnNumber) {
        $word = "";
        while($columnNumber>26) {
            $main_number = $columnNumber;
            $remaining = $columnNumber % 26;
            $columnNumber = (int)($columnNumber/26);
            if($remaining == 0) $columnNumber = $columnNumber -1;
            $word .= $this->getLetter($remaining);
        }
        if($columnNumber<=26) $word .= $this->getLetter($columnNumber);
        return strrev($word);

    }
}

$class = new leetcode_168();
$columnNumber = 701;
$ans = $class->convertToTitle($columnNumber);

echo $ans;