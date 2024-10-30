<?php

declare(strict_types=1);

namespace LeetCode\Tests;

use LeetCode\Problems\Beginner\Solution1480;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class Solution1480Test extends TestCase
{
    #[DataProvider('runningSumProvider')]
    public function testRunningSum($input, $expected, $description)
    {
        $solution = new Solution1480();
        
        $this->assertEquals($expected, $solution->runningSum($input), $description);
    }

    public static function runningSumProvider()
    {
        return [
            [
                [1, 2, 3, 4],
                [1, 3, 6, 10],
                "Test case 1: Running sum of [1, 2, 3, 4]"
            ],
            [
                [1, 1, 1, 1, 1],
                [1, 2, 3, 4, 5],
                "Test case 2: Running sum of [1, 1, 1, 1, 1]"
            ],
            [
                [3, 1, 2, 10, 1],
                [3, 4, 6, 16, 17],
                "Test case 3: Running sum of [3, 1, 2, 10, 1]"
            ],
        ];
    }
}
