<?php

declare(strict_types=1);

namespace LeetCode\Tests;

use LeetCode\Problems\Beginner\Solution1672;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Solution1672Test extends TestCase
{
    #[DataProvider('maximumWealthProvider')]
    public function testMaximumWealth($input, $expected, $description)
    {
        $solution = new Solution1672();
        
        $this->assertEquals($expected, $solution->maximumWealth($input), $description);
    }

    public static function maximumWealthProvider()
    {
        return [
            [
                [[1,2,3],[3,2,1]],
                6,
                "Test case 1: Both customers are considered the richest with a wealth of 6 each, so return 6."
            ],
            [
                [[1,5],[7,3],[3,5]],
                10,
                "Test case 2: The 2nd customer is the richest with a wealth of 10."
            ],
            [
                [[2,8,7],[7,1,3],[1,9,5]],
                17,
                "Test case 3: The 1st customer is the richest with a wealth of 17."
            ],
        ];
    }
}
