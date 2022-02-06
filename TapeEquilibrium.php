<?php
// https://app.codility.com/demo/results/trainingWR5M8R-ZUB/
function solution($A)
{
    $lSum = 0;
    $rSum = array_sum($A);
    $minDiff = INF;

    for ($i = 0; $i < count($A) - 1; $i++) {
        $lSum += $A[$i];
        $rSum -= $A[$i];
        $curDiff = abs($lSum - $rSum);
        $minDiff = min($minDiff, $curDiff);
    }

    return $minDiff;
}


echo solution([-10, 10, -5, 5, 5]);