<?php

namespace BrainGames\Brain\gcd;

use function BrainGames\Engine\startGame;

use const BrainGames\Engine\ROUNDS_COUNT;

const RULES = "Find the greatest common divisor of given numbers.";

function playGcd(): void
{
    $rounds = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $a = rand(1, 100);
        $b = rand(1, 50);
        $correctAnswer = gcd($a, $b);
        $rounds[] = ['question' => "{$a} {$b}", 'correctAnswer' => $correctAnswer];
    }
    startGame($rounds, RULES);
}
function gcd(int $a, int $b): int
{
    if ($b === 0) {
        return $a;
    } else {
        return gcd($b, $a % $b);
    }
}
