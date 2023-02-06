<?php

namespace BrainGames\Brain\gcd;

use function BrainGames\Engine\startGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const GCD = "Find the greatest common divisor of given numbers.";
function brainGcd(): void
{
    $round = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $a = rand(1, 100);
        $b = rand(1, 50);
        $correctAnswer = gcd($a, $b);
        $round[] = ['question' => "{$a} {$b}", 'correctAnswer' => $correctAnswer];
    }
    startGame($round, GCD);
}
function gcd(int $a, int $b): int
{
    if ($b === 0) {
        return $a;
    } else {
        return gcd($b, $a % $b);
    }
}
