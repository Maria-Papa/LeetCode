<?php

declare(strict_types=1);

namespace LeetCode\Problems\Beginner;

class Solution1672 {

    /**
     * @param int[][] $accounts
     * @return int
     */
    function maximumWealth($accounts) {
        $sumWealth = array_map(fn ($w) => array_sum($w), $accounts);
        
        return max(array_values($sumWealth));
    }
}
