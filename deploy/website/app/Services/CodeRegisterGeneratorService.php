<?php

namespace App\Services;

class CodeRegisterGeneratorService
{
    /**
     * Generate a random 6-digit code.
     *
     * @return int
     */
    
    public function generate(): int
    {
        return random_int(100000, 999999);
    }
}