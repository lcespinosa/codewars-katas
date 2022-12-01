<?php

namespace App;

use PHPUnit\Framework\TestCase;

class UniqueInOrderTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_get_unique_chars_from_empty()
    {
        $app = new UniqueInOrder;
        $this->assertSame([], $app->uniqueInOrder(''));
        $this->assertSame([], $app->uniqueInOrder([]));
    }

    /**
     * @test
     * @dataProvider stringWithoutRepetitionProvider
     */
    public function it_should_get_unique_chars_without_next_repetition_in_order($expected, $input)
    {
        $app = new UniqueInOrder;
        $this->assertSame($expected, $app->uniqueInOrder($input));
    }

    public function stringWithoutRepetitionProvider(): array
    {
        return [
            [['A'], 'A'],
            [['A'], 'AA'],
            [['A', 'B'], 'AAB'],
        ];
    }


    /**
     * @test
     * @dataProvider stringWithRepetitionProvider
     */
    public function it_should_get_unique_chars_with_next_repetition_in_order($expected, $input)
    {
        $app = new UniqueInOrder;
        $this->assertSame($expected, $app->uniqueInOrder($input));
    }

    public function stringWithRepetitionProvider(): array
    {
        return [
            [['A', 'B', 'A'], 'AABA'],
            [['A', 'B', 'A'], 'AABAA'],
            [['A', 'B', 'A', 'C'], 'AABAAC'],
            [['A', 'B', 'A', 'C'], 'AABAACC'],
        ];
    }


    /**
     * @test
     * @dataProvider itemsProvider
     */
    public function it_should_get_unique_items_in_order($expected, $input)
    {
        $app = new UniqueInOrder;
        $this->assertSame($expected, $app->uniqueInOrder($input));
    }

    public function itemsProvider(): array
    {
        return [
            [['A', 'B', 'C', 'D', 'A', 'B'], 'AAAABBBCCDAABBB'],
            [['A', 'B', 'C', 'c', 'A', 'D'], 'ABBCcAD'],
            [['A', 'B', 'A', 'C'], 'AABAAC'],
            [[1, 2, 3], [1, 2, 2, 3, 3]],
            [[1, 2, 3, 1, 0], [1, 2, 2, 3, 3, 1, 0, 0]],
        ];
    }
}
