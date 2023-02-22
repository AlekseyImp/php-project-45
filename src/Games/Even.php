<?php

namespace BrainGames\Brain\even;

use function BrainGames\Engine\startGame;

use const BrainGames\Engine\ROUNDS_COUNT;

const RULES = "Answer \"yes\" if the number is even, otherwise answer \"no\".";

function playEven(): void
{
    $rounds = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $num = rand(1, 100);
        $correctAnswer = isEven($num) ? 'yes' : 'no';
        $rounds[] = ['question' => $num, 'correctAnswer' => $correctAnswer];
    }
    startGame($rounds, RULES);
}

function isEven(int $num): bool
{
    if ($num % 2 === 0) {
        return true;
    } else {
        return false;
    }
}
