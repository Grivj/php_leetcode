<?php

function sortedSquares(iterable $nums): iterable
{
    /**
     * @param iterable $nums
     * @return iterable
     */
    $lnums = count($nums);
    $left = 0;
    $right = $lnums - 1;
    $write = $right;
    $result = array_fill(0, $lnums, 0);
    while ($left <= $right) {
        $left_sqrt = $nums[$left] ** 2;
        $right_sqrt = $nums[$right] ** 2;
        if ($left_sqrt >= $right_sqrt) {
            $result[$write] = $left_sqrt;
            $left++;
            $write--;
        } else {
            $result[$write] = $right_sqrt;
            $right--;
            $write--;

        }
    }

    return $result;
}

$input = [-7,-3,2,3,11];
var_dump(sortedSquares($input));
