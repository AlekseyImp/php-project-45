<?php

namespace BrainGames\Brain\even;

use function BrainGames\Engine\startGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const EVEN_RULES = "Answer \"yes\" if the number is even, otherwise answer \"no\".";

function playEven(): void
{
    $round = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $num = rand(1, 100);
        if (isEven($num)) {
            $correctAnswer = 'yes';
        } else {
            $correctAnswer = 'no';
        }
        $round[] = ['question' => $num, 'correctAnswer' => $correctAnswer];
    }
    startGame($round, EVEN_RULES);
}

function isEven(int $num): bool
{
    if ($num % 2 === 0) {
        return true;
    } else {
        return false;
    }
}
