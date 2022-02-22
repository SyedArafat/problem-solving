<?php
//Valid Parentheses
//Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine
//if the input string is valid.
//
//An input string is valid if:
//
//    Open brackets must be closed by the same type of brackets.
//Open brackets must be closed in the correct order.

/**
 * @param String $s
 * @return Boolean
 */
function isValid($s) {
    $arr = array();
    $sym = [
        ")" => "(",
        "]" => "[",
        "}" => "{"
    ];
    for($i=0; $i<strlen($s); $i++) {
        if($s[$i] == "(" || $s[$i] == "[" || $s[$i] == "{")
            $arr[] = $s[$i];

        elseif ($s[$i] == ")" || $s[$i] == "]" || $s[$i] == "}")
            if(isset($arr[(count($arr)-1)]) && $arr[(count($arr)-1)] == $sym[$s[$i]])
                array_pop($arr);
            else $arr[] = $s[$i];
    }
    return count($arr) == 0;
}

$s = "()[]{}";
$ans = isValid($s);
echo $ans;