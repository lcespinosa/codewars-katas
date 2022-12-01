<?php

namespace App;

class MoveZeros
{
    public function moveZeros(array $items): array
    {
        if (count($items) > 1) {
            $nonZerosArray = array_filter($items, function ($item) {
                return $item !== 0 && $item !== 0.0;
            });
            $zerosCount    = count(array_filter($items, function ($item) {
                return $item === 0 || $item === 0.0;
            }));

            return array_merge($nonZerosArray, array_fill(0, $zerosCount, 0));
        }

        return $items;
    }
}
