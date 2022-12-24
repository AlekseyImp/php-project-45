<?php

namespace BrainGames\Brain\calc;

use function BrainGames\Engine\startGame;

function brainCalc(): void
{
    $questionAndCorrectAnswer = [];
    $operands = ['+', '-', '*'];
    for ($i = 0; $i < 3; $i++) {
        $a = rand(1, 20);
        $b = rand(1, 20);
        $operand = rand(0, 2);
        $correctAnswer = getCorrectAnswer($operand, $a, $b);
        $expression = "{$a} {$operands[$operand]} {$b}";
        $questionAndCorrectAnswer[] = ['question' => $expression, 'correctAnswer' => $correctAnswer];
    }
    $question = "What is the result of the expression?";
    startGame($questionAndCorrectAnswer, $question);
}

function getCorrectAnswer(int $operands, int $a, int $b): int
{
    switch ($operands) {
        case 0:
            return $a + $b;
        case 1:
            return $a - $b;
        case 2:
            return $a * $b;
    }
}
