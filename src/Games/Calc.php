<?php

namespace BrainGames\Brain\calc;

use function BrainGames\Engine\startGame;

function brainCalc()
{
    $arrayOfCorrectAnswers = [];
    $operands = ['+', '-', '*'];
    for ($i = 0; $i < 3; $i++) {
        $a = rand(1, 20);
        $b = rand(1, 20);
        $operand = rand(0, 2);
        $correctAnswer = getCorrectAnswer($operand, $a, $b);
        $arrayOfCorrectAnswers[] = ["{$a} {$operands[$operand]} {$b}" => $correctAnswer];
    }
    startGame('calc', $arrayOfCorrectAnswers);
}

function getCorrectAnswer(int $operand, int $a, int $b)
{
    switch ($operand) {
        case 0:
            return $a + $b;
        case 1:
            return $a - $b;
        case 2:
            return $a * $b;
    }
}
