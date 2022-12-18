<?php

namespace BrainGames\Brain\gcd;

use function BrainGames\Engine\startGame;

function brainGcd()
{
    $arrayOfCorrectAnswers = [];
    for ($i = 0; $i < 3; $i++) {
        $a = rand(1, 100);
        $b = rand(1, 50);
        $correctAnswer = gcd($a, $b);
        $arrayOfCorrectAnswers[] = ["{$a} {$b}" => $correctAnswer];
    }
    startGame('gcd', $arrayOfCorrectAnswers);
}
function gcd(int $a, int $b): int
{
    if ($b === 0) {
        return $a;
    } else {
        return gcd($b, $a % $b);
    }
}
