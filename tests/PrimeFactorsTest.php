<?php


use App\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    /**
     * @test
     * @dataProvider factors
     */
    public function it_generate_a_prime_factors_for_1($number, $expected)
    {
        $factroies = new PrimeFactors();

        $this->assertEquals($expected, $factroies->generare($number));
    }

    public function factors()
    {
        return [
            [1, []],
            [2, [2]],
            [3, [3]],
            [4, [2, 2]],
            [5, [5]],
            [6, [2, 3]],
            [7, [7]],
            [8, [2, 2, 2]],
            [100, [2, 2, 5, 5]],
            [999, [3, 3, 3, 37]],
        ];
    }
}
