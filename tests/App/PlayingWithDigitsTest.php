<?php

namespace App;

use PHPUnit\Framework\TestCase;

class PlayingWithDigitsTest extends TestCase
{

    /**
     * @test
     * @dataProvider numbersProvider
     */
    public function it_should_return_k_number($k, $n, $p)
    {
        $app = new PlayingWithDigits;
        $this->assertEquals($k, $app->digPow($n, $p));
    }

    public function numbersProvider(): array
    {
        return [
            [1, 89, 1],
            [-1, 92, 1],
            [51, 46288, 3],
        ];
    }
}
