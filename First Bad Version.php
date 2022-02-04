<?php
/* The isBadVersion API is defined in the parent class VersionControl.
public function isBadVersion($version){} */

class Solution extends VersionControl
{
    /**
     * @param Integer $n
     * @return Integer
     */
    public function firstBadVersion($n)
    {
        $first = 0;
        $last = $n;
        if ($this->isBadVersion($first)) {
            return $first;
        }
        while ($first < $last) {
            $middle = floor(($first + $last) / 2);

            if ($this->isBadVersion($middle)) {
                $last = $middle;
            } else {
                $first = $middle + 1;
            }
        }
        return $first;

    }
}
