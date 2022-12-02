<?php

namespace App;

class PileOfCubes
{
    public function findNb($m): int
    {
        $cube = (sqrt(8 * sqrt($m) + 1) - 1) / 2;

        return $cube === floor($cube) ? (int)$cube : -1;
    }
}