<?php

namespace BrainGames\Brain\even;

use function BrainGames\Engine\startGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const EVEN_NUMBER_OR_NOT = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
function brainEven(): void
{
    $round = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $num = rand(1, 100);
        $correctAnswer = getCorrectAnswer($num);
        $round[] = ['question' => $num, 'correctAnswer' => $correctAnswer];
    }
    startGame($round, EVEN_NUMBER_OR_NOT);
}
function getCorrectAnswer(int $num): string
{
    if ($num % 2 === 0) {
        return 'yes';
    } else {
        return 'no';
    }
}
