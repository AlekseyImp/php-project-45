<?php

namespace BrainGames\Brain\progression;

use function BrainGames\Engine\startGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const PROGRESSION = "What number is missing in the progression?";
function brainProgression(): void
{
    $round = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
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
        $round[] = ['question' => $progression, 'correctAnswer' => $correctAnswer];
    }
    startGame($round, PROGRESSION);
}
function makeString(array $progression): string
{
    $stringProgression = '';
    foreach ($progression as $val) {
        $stringProgression .= "{$val} ";
    }
    return $stringProgression;
}
