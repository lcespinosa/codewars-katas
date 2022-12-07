<?php

namespace App;

class MultiplesOf3Or5
{
    public function solution($limit): int
    {
        if ($limit > 0) {
            $multiplesOf3 = $this->getMultiplesOfNumberLessThan($limit, 3);
            $multiplesOf5 = $this->getMultiplesOfNumberLessThan($limit, 5);
            $multiples    = array_unique(array_merge($multiplesOf3, $multiplesOf5));

            return array_sum($multiples);
        }

        return 0;
    }

    public function getMultiplesOfNumberLessThan($limit, $number): array
    {
        $output = [];
        for ($i = $number; $i <= (($limit - 1) / $number) * $number; $i += $number) {
            $output[] = $i;
        }

        return $output;
    }
}
