<?php
//Reverse Prefix of Word

//Given a 0-indexed string word and a character ch, reverse the segment of word that starts at
//index 0 and ends at the index of the first occurrence of ch (inclusive). If the character ch
//does not exist in word, do nothing.
//
//For example, if word = "abcdefd" and ch = "d", then you should reverse the segment that starts at 0 and ends at 3 (inclusive). The resulting string will be "dcbaefd".
//Return the resulting string.

/**
 * @param String $word
 * @param String $ch
 * @return String
 */
function reversePrefix($word, $ch) {
    $ch_index = 0;
    $new_string = '';
    $str_len = strlen($word);
    for($i=0; $i<$str_len; $i++) {
        if($word[$i] == $ch) {
            $ch_index = $i;
            break;
        }
    }
    for($i=$ch_index; $i>=0; $i--) {
        $new_string .= $word[$i];
    }
    if($ch_index < $str_len) {
        for($i=$ch_index+1; $i<$str_len; $i++) {
            $new_string .=$word[$i];
        }
    }
    return ($new_string);
}

$word = "abcdefd";
$ch = "d";
$ans = reversePrefix($word, $ch);

echo $ans;
