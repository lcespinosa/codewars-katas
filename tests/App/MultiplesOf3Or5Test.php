<?php

namespace App;

use PHPUnit\Framework\TestCase;

class MultiplesOf3Or5Test extends TestCase
{
    /** @test */
    public function it_should_return_0_for_negative_number()
    {
        $app = new MultiplesOf3Or5;
        $this->assertEquals(0, $app->solution(-10));
    }

    /**
     * @test
     * @dataProvider numbersProvider
     */
    public function it_should_return_multiples_for_number($expect, $number)
    {
        $app = new MultiplesOf3Or5;
        $this->assertEquals($expect, $app->solution($number));
    }

    public function numbersProvider(): array
    {
        return [
            [23, 10],
            [225, 31],
        ];
    }
}
