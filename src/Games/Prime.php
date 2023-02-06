<?php

namespace BrainGames\Brain\prime;

use function BrainGames\Engine\startGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const PRIME_NUMBER = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";
function brainPrime(): void
{
    $round = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $primeNum = rand(2, 103);
        if (isPrime($primeNum)) {
            $correctAnswer = 'yes';
        } else {
            $correctAnswer = 'no';
        }
        $round[] = ['question' => $primeNum, 'correctAnswer' => $correctAnswer];
    }
    startGame($round, PRIME_NUMBER);
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
