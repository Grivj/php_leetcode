<?php
function isEven(int $num): bool
{
    /**
     * @param int $num
     * @return Integer
     * * Returns True if the number is even, False otherwise
     */
    if ($num % 2 == 0) {
        return true;
    }
    return false;
}

function findNumbers(iterable $nums): int
{
    /**
     * @param Integer[] $nums
     * @return Integer
     * * Find Numbers with Even Number of Digits
     */
    $countEvens = 0;
    foreach ($nums as $num) {
        $countEvens = isEven(strlen($num)) ? $countEvens + 1 : $countEvens;
    }

    return $countEvens;
}


echo findNumbers([0, 12, 2, 32, 4]);
