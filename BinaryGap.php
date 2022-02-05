<?php

// function solution($N) {
//     $binary = decbin($N);
//     echo "$binary <br/>";
//     $curGap = 0;
//     $maxGap = 0;
//     foreach (str_split($binary) as $b) {
//         if ($b == 1) { // closing or opening a gap
//             $maxGap = max($maxGap, $curGap);
//             $curGap = 0;
//         } else {
//             $curGap++;
//         }
//         echo "$b, $curGap, $maxGap <br/>";

//     }
//     return $maxGap;
// }

function solution($N)
{
    $binary = decbin($N);
    $zeros = explode('1', $binary);
    // We only count zeros that are inside 1s.
    // Therefor we pop the last and then first exploded elements.
    unset($zeros[count($zeros) - 1]);
    unset($zeros[0]);
    if (count($zeros) == 0) {
        return 0;
    }
    return max(
        array_map('strlen', $zeros)
    );

}

echo solution(100);
