<?php

namespace App;

class PlayingWithDigits
{

    public function digPow(int $n, int $p): int
    {
        $totalPow = 0;
        $digits   = str_split("" . $n);
        foreach ($digits as $base => $digit) {
            $totalPow += pow(strval($digit), $base + $p);
        }
        if ($totalPow % $n !== 0) {
            return -1;
        }

        return $totalPow / $n;
    }

}
