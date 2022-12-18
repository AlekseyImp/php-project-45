<?php

namespace BrainGames\Brain\prime;

use function BrainGames\Engine\startGame;

function brainPrime()
{
    $arrayOfCorrectAnswers = [];
    for ($i = 0; $i < 3; $i++) {
        $primeNum = rand(2, 103);
        $correctAnswer = isPrime($primeNum);
        $arrayOfCorrectAnswers[] = [$primeNum => $correctAnswer];
    }
    startGame('prime', $arrayOfCorrectAnswers);
}
function isPrime(int $num): string
{
    $end = round(sqrt($num));
    $count = 0;
    for ($i = 2; $i <= $end; $i++) {
        if ($num % $i === 0) {
            $count++;
        }
    }
    if ($count === 0) {
        return 'yes';
    } else {
        return 'no';
    }
}
