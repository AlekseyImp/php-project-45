<?php

namespace BrainGames\Brain\calc;

use function BrainGames\Engine\startGame;

const CALC = "What is the result of the expression?";
function brainCalc(): void
{
    $round = [];
    $operands = ['+', '-', '*'];
    for ($i = 0; $i < 3; $i++) {
        $a = rand(1, 20);
        $b = rand(1, 20);
        $operand = rand(0, 2);
        try {
            $correctAnswer = getCorrectAnswer(3, $a, $b);
        } catch(\Exception $e) {
            echo $e;
        }
        $expression = "{$a} {$operands[$operand]} {$b}";
        $round[] = ['question' => $expression, 'correctAnswer' => $correctAnswer];
    }
    startGame($round, CALC);
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
    }
    return throw new \Exception("Undefined operand");
}
