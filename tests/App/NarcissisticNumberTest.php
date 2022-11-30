<?php

namespace App;

use PHPUnit\Framework\TestCase;

class NarcissisticNumberTest extends TestCase
{
    /**
     * @test
     */
    public function it_return_true_if_number_is_less_than_10()
    {
        $app = new NarcissisticNumber();
        foreach (range(1, 9) as $number) {
            $this->assertTrue($app->isNarcissistic($number));
        }
    }

    /**
     * @test
     * @dataProvider narcissisticNumbers
     */
    public function it_return_false_if_number_is_narcissistic($number)
    {
        $app = new NarcissisticNumber();
        $this->assertTrue($app->isNarcissistic($number));
    }

    /**
     * @test
     * @dataProvider noneNarcissisticNumbers
     */
    public function it_return_false_if_number_is_not_narcissistic($number)
    {
        $app = new NarcissisticNumber();
        $this->assertFalse($app->isNarcissistic($number));
    }

    public function narcissisticNumbers()
    {
        return [
            [0],
            [1],
            [2],
            [3],
            [4],
            [5],
            [6],
            [7],
            [8],
            [9],
            [153],
            [370],
            [371],
            [407],
            [1634],
            [8208],
            [9474],
            [4338281769391370],
            [4338281769391371],
        ];
    }

    public function noneNarcissisticNumbers()
    {
        return [
            [10],
            [20],
            [34],
            [50],
            [123],
            [345],
            [321],
            [465],
            [1000],
            [2003],
            [4768],
        ];
    }
}
