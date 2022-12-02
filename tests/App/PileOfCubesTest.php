<?php

namespace App;

use PHPUnit\Framework\TestCase;

class PileOfCubesTest extends TestCase
{
    /** @test */
    public function it_should_find_n_cube()
    {
        $app = new PileOfCubes;
        $this->assertSame(2022, $app->findNb(4183059834009));
        $this->assertSame(-1, $app->findNb(24723578342962));
        $this->assertSame(4824, $app->findNb(135440716410000));
    }
}
