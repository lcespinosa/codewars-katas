<?php


namespace App;

use PHPUnit\Framework\TestCase;

class WhoLikeTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_show_no_one_likes()
    {
        $result = (new WhoLikes)->likes([]);

        $this->assertSame('no one likes this', $result);
    }

    /**
     * @test
     */
    public function it_can_show_for_one_name()
    {
        $result = (new WhoLikes)->likes(['Peter']);

        $this->assertSame('Peter likes this', $result);
    }

    /**
     * @test
     */
    public function it_can_show_for_two_names()
    {
        $result = (new WhoLikes)->likes(["Jacob", "Alex"]);

        $this->assertSame('Jacob and Alex like this', $result);
    }

    /**
     * @test
     */
    public function it_can_show_for_three_names()
    {
        $result = (new WhoLikes)->likes(["Max", "John", "Mark"]);

        $this->assertSame('Max, John and Mark like this', $result);
    }

    /**
     * @test
     */
    public function it_can_show_for_more_than_three_names()
    {
        $result = (new WhoLikes)->likes(["Alex", "Jacob", "Mark", "Max"]);

        $this->assertSame('Alex, Jacob and 2 others like this', $result);
    }
}
