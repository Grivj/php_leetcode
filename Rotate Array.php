<?php
// codility CyclicRotation
function solution($A, $K)
{
    if ($K <= 0) {
        return $A;
    }
    $C = count($A);
    if ($C <= 1) {
        return $A;
    }
    $K = $K > $C ? $K % $C : $K;
    return array_merge(
        array_slice($A, -$K),
        array_slice($A, 0, $C - $K)
    );
}

echo solution([1, 2, 3, 4, 5, 6, 7], 3);
