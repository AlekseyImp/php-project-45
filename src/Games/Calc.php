<?php

namespace BrainGames\Brain\calc;

use function BrainGames\Engine\startGame;

use const BrainGames\Engine\ROUNDS_COUNT;

const RULES = "What is the result of the expression?";

function playCalc(): void
{
    $rounds = [];
    $operands = ['+', '-', '*'];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $a = rand(1, 20);
        $b = rand(1, 20);
        $operand = rand(0, 2);
        $correctAnswer = getCorrectAnswer($operands[$operand], $a, $b);
        $expression = "{$a} {$operands[$operand]} {$b}";
        $rounds[] = ['question' => $expression, 'correctAnswer' => $correctAnswer];
    }
    startGame($rounds, RULES);
}

function getCorrectAnswer(string $operand, int $a, int $b): int
{
    switch ($operand) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        default:
            throw new \Exception("Undefined operand '{$operand}'");
    }
}
