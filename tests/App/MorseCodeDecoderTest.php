<?php

namespace App;

use PHPUnit\Framework\TestCase;

class MorseCodeDecoderTest extends TestCase
{
    /** @test */
    public function it_should_decode_a_character()
    {
        $app = new MorseCodeDecoder;
        $this->assertSame('E', $app->decode_morse('.'));
    }

    /** @test */
    public function it_should_decode_a_word()
    {
        $app = new MorseCodeDecoder;
        $this->assertSame('HEY', $app->decode_morse('.... . -.--'));
    }

    /** @test */
    public function it_should_decode_a_sentence()
    {
        $app = new MorseCodeDecoder;
        $this->assertSame('HEY JUDE', $app->decode_morse('.... . -.--   .--- ..- -.. .'));
    }
}
