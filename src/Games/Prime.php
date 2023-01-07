<?php

namespace BrainGames\Brain\prime;

use function BrainGames\Engine\startGame;

const PRIME = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";
function brainPrime(): void
{
    $questionAndCorrectAnswer = [];
    for ($i = 0; $i < 3; $i++) {
        $primeNum = rand(2, 103);
        if (isPrime($primeNum)) {
            $correctAnswer = 'yes';
        } else {
            $correctAnswer = 'no';
        }
        $questionAndCorrectAnswer[] = ['question' => $primeNum, 'correctAnswer' => $correctAnswer];
    }
    startGame($questionAndCorrectAnswer, PRIME);
}

function isPrime(int $num): bool
{
    $end = round(sqrt($num));
    $count = 0;
    for ($i = 2; $i <= $end; $i++) {
        if ($num % $i === 0) {
            $count++;
        }
    }
    if ($count === 0) {
        return true;
    } else {
        return false;
    }
}
