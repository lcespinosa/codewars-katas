<?php

namespace App;

class MorseCodeDecoder
{

    const MORSE_CODE = [
        '.-'        => 'a',
        '-...'      => 'b',
        '-.-.'      => 'c',
        '-..'       => 'd',
        '.'         => 'e',
        '..-.'      => 'f',
        '--.'       => 'g',
        '....'      => 'h',
        '..'        => 'i',
        '.---'      => 'j',
        '-.-'       => 'k',
        '.-..'      => 'l',
        '--'        => 'm',
        '-.'        => 'n',
        '---'       => 'o',
        '.--.'      => 'p',
        '--.-'      => 'q',
        '.-.'       => 'r',
        '...'       => 's',
        '-'         => 't',
        '..-'       => 'u',
        '...-'      => 'v',
        '.--'       => 'w',
        '-..-'      => 'x',
        '-.--'      => 'y',
        '--..'      => 'z',
        '-----'     => '0',
        '.----'     => '1',
        '..---'     => '2',
        '...--'     => '3',
        '....-'     => '4',
        '.....'     => '5',
        '-....'     => '6',
        '--...'     => '7',
        '---..'     => '8',
        '----.'     => '9',
        '.-.-.-'    => '.',
        '--..--'    => ',',
        '..--..'    => '?',
        '-..-.'     => '/',
        ' '         => ' ',
        '···−−−···' => 'SOS',
    ];


    public function decode_morse(string $code): string
    {
        $decodedWords = [];
        $words        = explode('   ', trim($code));
        foreach ($words as $word) {
            $decodedWords[] = $this->decode_word($word);
        }

        return strtoupper(implode(' ', $decodedWords));
    }

    public function decode_word($word): string
    {
        $output     = '';
        $characters = explode(' ', $word);
        foreach ($characters as $character) {
            $output .= self::MORSE_CODE[$character];
        }

        return $output;
    }
}
