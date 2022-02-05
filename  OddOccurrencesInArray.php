<?php

function findOddOccurrences($A)
{
    if (count($A) == 1) {
        return $A[0];
    }

    $stack = array();
    foreach ($A as $a) {
        if (array_key_exists($a, $stack)) {
            unset($stack[$a]);
        }
        else {
            $stack[$a] = 0;
        }
    }
    return key($stack);
}



findOddOccurrences([9, 3, 9, 3, 9, 7, 9]);