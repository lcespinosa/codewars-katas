<?php

namespace App;

use PHPUnit\Framework\TestCase;

class MoveZerosTest extends TestCase
{
    /** @test */
    public function it_return_the_same_one_item_array()
    {
        $app = new MoveZeros;
        $this->assertSame([1], $app->moveZeros([1]));
    }

    /** @test */
    public function it_return_the_array_with_zeros_at_the_end()
    {
        $app = new MoveZeros;
        $this->assertSame([1, 0], $app->moveZeros([0, 1]));

        $this->assertSame([1, 2, 1, 1, 3, 1, 0, 0, 0, 0], $app->moveZeros([1, 2, 0, 1, 0, 1, 0, 3, 0, 1]));
        $this->assertSame([9, 9, 1, 2, 1, 1, 3, 1, 9, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0], $app->moveZeros([
            9,
            0.0,
            0,
            9,
            1,
            2,
            0,
            1,
            0,
            1,
            0.0,
            3,
            0,
            1,
            9,
            0,
            0,
            0,
            0,
            9,
        ]));
        $this->assertSame(["a", "b", "c", "d", 1, 1, 3, 1, 9, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0], $app->moveZeros([
            "a",
            0,
            0,
            "b",
            "c",
            "d",
            0,
            1,
            0,
            1,
            0,
            3,
            0,
            1,
            9,
            0,
            0,
            0,
            0,
            9,
        ]));
        $this->assertSame([
            "a",
            "b",
            null,
            "c",
            "d",
            1,
            false,
            1,
            3,
            [],
            1,
            9,
            9,
            0,
            0,
            0,
            0,
            0,
            0,
            0,
            0,
            0,
            0,
        ], $app->moveZeros(["a", 0, 0, "b", null, "c", "d", 0, 1, false, 0, 1, 0, 3, [], 0, 1, 9, 0, 0, 0, 0, 9]));
        $this->assertSame([1, null, 2, false, 1, 0, 0], $app->moveZeros([0, 1, null, 2, false, 1, 0]));
        $this->assertSame(["a", "b"], $app->moveZeros(["a", "b"]));
        $this->assertSame(["a"], $app->moveZeros(["a"]));
        $this->assertSame([0, 0], $app->moveZeros([0, 0]));
        $this->assertSame([0], $app->moveZeros([0]));
        $this->assertSame([false], $app->moveZeros([false]));
        $this->assertSame([], $app->moveZeros([]));
    }
}
