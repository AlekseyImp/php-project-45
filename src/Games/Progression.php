<?php

namespace BrainGames\Brain\progression;

use function BrainGames\Engine\startGame;

function brainProgression()
{
    $arrayOfCorrectAnswers = [];
    for ($i = 0; $i < 3; $i++) {
        $size = rand(5, 10);
        $increase  = rand(2, 10);
        $progression = [];
        $progression[0] = $increase;
        $hidenNum = rand(0, $size - 1);
        for ($j = 1; $j < $size; $j++) {
            $progression[$j] = $progression[$j - 1] + $increase;
        }
        $correctAnswer = $progression[$hidenNum];
        $progression[$hidenNum] = '..';
        $progression = makeString($progression);
        $arrayOfCorrectAnswers[] = [$progression => $correctAnswer];
    }
    startGame('progression', $arrayOfCorrectAnswers);
}
function makeString(array $progression): string
{
    $stringProgression = '';
    foreach ($progression as $val) {
        $stringProgression .= "{$val} ";
    }
    return $stringProgression;
}