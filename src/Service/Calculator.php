<?php

declare(strict_types=1);

namespace App\Service;

class Calculator
{
    public function add(int $firstNumber, int $secondeNumber): int
    {
        return $firstNumber + $secondeNumber;
    }
}
