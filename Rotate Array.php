<?php

function rotate($nums, $k)
{
    if ($k <= 0) {
        return;
    }
    $count = count($nums);
    if ($count == 1) {
        return;
    }
    $k = $k > $count ? $k % $count : $k;
    $nums = array_merge(array_slice($nums, -$k), array_slice($nums, 0, $count - $k));
}

echo rotate([1, 2, 3, 4, 5, 6, 7], 3);
