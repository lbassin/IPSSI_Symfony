<?php

declare(strict_types=1);

namespace App\Service;

class Calculator
{
    public
    function
    add(int $firstNumber, int $secondNumber): int
    {
        $test = 32;

        if ($test == 'salut') {
            echo 'ok';
        }

        return $firstNumber + $secondNumber;
    }
} ?>