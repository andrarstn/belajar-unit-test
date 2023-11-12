<?php 

namespace Andrarstn\BelajarUnitTest;

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testManual()
    {
        self::assertEquals(10, Math::sum([5,5]));
        self::assertEquals(16, Math::sum([4, 4, 4, 4]));
    }

    /**
     * @dataProvider mathSumData
     */
    public function testDataProvider(array $values, int $expected)
    {
        self::assertEquals($expected, Math::sum($values));
    }

    public function mathSumData(): array
    {
        return [
            [[5,5], 10],
            [[4, 4, 4, 4], 16],
            [[3, 3, 3], 9],
            [[], 0],
            [[2], 2],
        ];
    }

    /**
     * Only for simple case
     * @testWith [[5,5], 10]
                 [[4, 4, 4, 4], 16]
                 [[3, 3, 3], 9]
                 [[], 0]
                 [[2], 2]
     */
    public function testWith(array $values, int $expected)
    {
        self::assertEquals($expected, Math::sum($values));
    }
}