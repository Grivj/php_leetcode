<?php
// https://app.codility.com/demo/results/training535NST-Z5J/
function solution($A)
{
    sort($A);

    for ($i = 1; $i < count($A) + 1; $i++) {
        if ($i != $A[$i - 1]) {
            return $i;
        }
    }
    return $i;
}



echo solution([2, 3, 1, 4, 6]);
