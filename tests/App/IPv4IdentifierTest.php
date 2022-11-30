<?php

namespace App;

use PHPUnit\Framework\TestCase;

class IPv4IdentifierTest extends TestCase
{
    /**
     * @test
     * @dataProvider ipValidProvider
     */
    public function it_should_identify_ip($ip)
    {
        $app = new IPv4Identifier;
        $this->assertTrue($app->isValidIP($ip), "Failed asserting that '$ip' is a valid IP4 address.");
    }

    public function ipValidProvider(): array
    {
        return [
            ['0.0.0.0'],
            ['255.255.255.255'],
            ['238.46.26.43'],
            ['0.34.82.53'],
        ];
    }


    /**
     * @test
     * @dataProvider ipInValidProvider
     */
    public function it_should_identify_invalid_ip($ip)
    {
        $app = new IPv4Identifier;
        $this->assertFalse($app->isValidIP($ip), "Failed asserting that '$ip' is an invalid IP4 address.");
    }

    public function ipInValidProvider(): array
    {
        return [
            ['a.d.g.j'],
            [''],
            ['abc.def.ghi.jkl'],
            ['123.456.789.0'],
            [' 1.2.3.4'],
            ['03.45.20.1'],
            ['192.168.00.3'],
            ['0.34.82.53.10'],
        ];
    }
}
