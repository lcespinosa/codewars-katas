<?php

namespace App;

class UniqueInOrder
{
    public function uniqueInOrder($iterable): array
    {
        if (empty($iterable)) {
            return [];
        }

        if (is_string($iterable)) {
            $iterable = str_split($iterable);
        }

        $output   = [];
        $lastItem = null;
        foreach ($iterable as $item) {
            if ($item === $lastItem) {
                continue;
            }
            $output[] = $lastItem = $item;
        }

        return $output;
    }
}
