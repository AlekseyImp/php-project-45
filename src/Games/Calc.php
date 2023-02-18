<?php

namespace BrainGames\Brain\calc;

use function BrainGames\Engine\startGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const CALC_RULES = "What is the result of the expression?";

function playCalc(): void
{
    $round = [];
    $operands = ['+', '-', '*'];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $a = rand(1, 20);
        $b = rand(1, 20);
        $operand = rand(0, 2);
        $correctAnswer = 0;
        $correctAnswer = getCorrectAnswer($operand, $a, $b);
        $expression = "{$a} {$operands[$operand]} {$b}";
        $round[] = ['question' => $expression, 'correctAnswer' => $correctAnswer];
    }
    startGame($round, CALC_RULES);
}

function getCorrectAnswer(int $operand, int $a, int $b): int
{
    switch ($operand) {
        case 0:
            return $a + $b;
        case 1:
            return $a - $b;
        case 2:
            return $a * $b;
        default:
            throw new \Exception("Undefined operand");
    }
}
