<?php

namespace BrainGames\Brain\even;

use function BrainGames\Engine\startGame;

const EVEN = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
function brainEven(): void
{
    $round = [];
    for ($i = 0; $i < 3; $i++) {
        $num = rand(1, 100);
        $correctAnswer = getCorrectAnswer($num);
        $round[] = ['question' => $num, 'correctAnswer' => $correctAnswer];
    }
    startGame($round, EVEN);
}
function getCorrectAnswer(int $num): string
{
    if ($num % 2 === 0) {
        return 'yes';
    } else {
        return 'no';
    }
}
