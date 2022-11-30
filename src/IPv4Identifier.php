<?php

namespace App;

class IPv4Identifier
{

    public function isValidIP(string $ip): bool
    {
        $regexp  = '/^(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})$/';
        $matches = [];
        preg_match($regexp, $ip, $matches);

        $octets = array_slice($matches, 1);
        foreach ($octets as $octet) {
            if ($this->isOctetInValid(trim($octet))) {
                return false;
            }
        }

        return !empty($octets);
    }

    public function isOctetInValid(string $octet): bool
    {
        $isGraterThan255 = $octet > 255;
        $startWithZero   = strlen($octet) > 1 && strpos($octet, '0') === 0;

        return $startWithZero || $isGraterThan255;
    }
}
