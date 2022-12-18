<?php

namespace BrainGames\Brain\even;

use function BrainGames\Engine\startGame;

function brainEven()
{
    $arrayOfCorrectAnswers = [];
    for ($i = 0; $i < 3; $i++) {
        $num = rand(1, 100);
        $correctAnswer = getCorrectAnswer($num);
        $arrayOfCorrectAnswers[] = [$num => $correctAnswer];
    }
    startGame('even', $arrayOfCorrectAnswers);
}
function getCorrectAnswer(int $num): string
{
    if ($num % 2 === 0) {
        return 'yes';
    } else {
        return 'no';
    }
}
