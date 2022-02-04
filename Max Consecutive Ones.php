<?php
// Given a binary array nums, return the maximum number of consecutive 1's in
// the array.

function findMaxConsecutiveOnes(iterable $nums): int
{
    $currConsecutive = 0;
    $maxConsecutive = 0;
    foreach ($nums as $num) {
        if ($num === 1) {
            $currConsecutive += 1;
        } elseif ($num === 0) {
            $maxConsecutive = max($maxConsecutive, $currConsecutive);
            $currConsecutive = 0;
        }
    }
    return max($maxConsecutive, $currConsecutive);
}

echo findMaxConsecutiveOnes([1, 1, 1, 1]);
