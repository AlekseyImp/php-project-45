<?php

namespace BrainGames\Brain\gcd;

use function BrainGames\Engine\startGame;

function brainGcd(): void
{
    $questionAndCorrectAnswer = [];
    for ($i = 0; $i < 3; $i++) {
        $a = rand(1, 100);
        $b = rand(1, 50);
        $correctAnswer = gcd($a, $b);
        $questionAndCorrectAnswer[] = ['question' => "{$a} {$b}", 'correctAnswer' => $correctAnswer];
    }
    $question = "Find the greatest common divisor of given numbers.";
    startGame($questionAndCorrectAnswer, $question);
}
function gcd(int $a, int $b): int
{
    if ($b === 0) {
        return $a;
    } else {
        return gcd($b, $a % $b);
    }
}
