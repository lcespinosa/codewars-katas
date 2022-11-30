<?php

namespace App;

class NarcissisticNumber
{
    public function isNarcissistic(int $number)
    {
        $strNumber = strval($number);
        $digitCount = strlen($strNumber);

        $powers = [];
        foreach (str_split($strNumber) as $digit) {
            $powers[] = pow($digit, $digitCount);
        }

        return array_sum($powers) === $number;
    }
}
