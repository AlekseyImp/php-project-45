<?php

namespace BrainGames\Brain\progression;

use function BrainGames\Engine\startGame;

use const BrainGames\Engine\ROUNDS_COUNT;

const RULES = "What number is missing in the progression?";

function playProgression(): void
{
    $rounds = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
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
        $rounds[] = ['question' => $progression, 'correctAnswer' => $correctAnswer];
    }
    startGame($rounds, RULES);
}
function makeString(array $progression): string
{
    $stringProgression = '';
    foreach ($progression as $val) {
        $stringProgression .= "{$val} ";
    }
    return $stringProgression;
}
