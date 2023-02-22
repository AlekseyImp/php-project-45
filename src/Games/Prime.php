<?php

namespace BrainGames\Brain\prime;

use function BrainGames\Engine\startGame;

use const BrainGames\Engine\ROUNDS_COUNT;

const RULES = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";

function playPrime(): void
{
    $rounds = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $primeNum = rand(2, 103);
        $correctAnswer = isPrime($primeNum) ? 'yes' : 'no';
        $rounds[] = ['question' => $primeNum, 'correctAnswer' => $correctAnswer];
    }
    startGame($rounds, RULES);
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
