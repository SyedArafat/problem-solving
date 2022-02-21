<?php

//We are playing the Guess Game. The game is as follows:
//
//I pick a number from 1 to n. You have to guess which number I picked.
//
//Every time you guess wrong, I will tell you whether the number I picked is higher or lower than your guess.
//
//You call a pre-defined API int guess(int num), which returns three possible results:
//
//-1: Your guess is higher than the number I picked (i.e. num > pick).
//1: Your guess is lower than the number I picked (i.e. num < pick).
//0: your guess is equal to the number I picked (i.e. num == pick).
//Return the number that I picked.

class leetcode_374
{
    /**
     * @param Integer $n
     * @return Integer
     */
    public function guessNumber($n)
    {
        $start = 0;
        $end = $n;
        while (1) {
            $new_num = (int)(($start + $end) / 2);
            if ($this->guess($new_num) === -1) {
                $end = $new_num - 1;
            } elseif ($this->guess($new_num) === 1) {
                $start = $new_num + 1;
            } elseif ($this->guess($new_num) === 0) {
                return $new_num;
            }
        }

    }

    function guess($num): int
    {
        $guess_number = 8;
        if($guess_number < $num) return -1;
        elseif ($guess_number > $num) return 1;
        return 0;
    }

}

$problem = new leetcode_374();
$a = $problem->guessNumber(10);
echo $a;
exit();