<?php

declare(strict_types=1);

namespace LeetCode\Problems\Beginner;

class Solution1480 {

    /**
    * @param int[] $nums
    * @return int[]
    */
    function runningSum($nums) {
        for ($i = 1; $i < count($nums); $i++) {
            $nums[$i] += $nums[$i - 1];
        }

        return $nums;
    }
}
