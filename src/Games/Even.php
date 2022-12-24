<?php

namespace BrainGames\Brain\even;

use function BrainGames\Engine\startGame;

function brainEven(): void
{
    $questionAndCorrectAnswer = [];
    for ($i = 0; $i < 3; $i++) {
        $num = rand(1, 100);
        $correctAnswer = getCorrectAnswer($num);
        $questionAndCorrectAnswer[] = ['question' => $num, 'correctAnswer' => $correctAnswer];
    }
    $question = "Answer \"yes\" if the number is even, otherwise answer \"no\".";
    startGame($questionAndCorrectAnswer, $question);
}
function getCorrectAnswer(int $num): string
{
    if ($num % 2 === 0) {
        return 'yes';
    } else {
        return 'no';
    }
}
