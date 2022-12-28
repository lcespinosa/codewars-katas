<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ReverseNumbersTest extends TestCase
{
    /** @test */
    public function it_return_reverse_for_less_than_10()
    {
        $app = new ReverseNumbers;
        $this->assertSame('0', $app->find_reverse_number('1'));
    }
}
