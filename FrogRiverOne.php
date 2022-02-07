<?php

function solution($X, $A)
{ /*
  * $A: integer[] representing falling leaves. * A[K] represents the position
  * where one leaf falls at time K, measured in seconds.
  */
    $path = array_fill(0, $X, FALSE);
    $sumLeaves = 0;

    for ($i = 0; $i < count($A); $i++) {
        if ($A[$i] > $X) {
            continue;
        }
        if (!$path[$A[$i] - 1]) {
            $sumLeaves++;
            $path[$A[$i] - 1] = TRUE;
        }
        if ($sumLeaves == $X) {
            return $i;
        }
    }
    return -1;
}


echo solution(3, [1, 3, 1, 4, 2, 3, 5, 4]);