<?php

namespace BrainGames\Brain\calc;

use function BrainGames\Cli\greetings;
use function BrainGames\Cli\line;
use function BrainGames\Cli\isCorrectAnswer;
use function BrainGames\Cli\getSTDIN;
use function BrainGames\Cli\showTask;

function brainCalc()
{
    $userName = greetings();
    showTask('calc');
    for ($i = 0; $i < 3; $i++) {
        $a = rand(1, 20);
        $b = rand(1, 20);
        $operand = rand(1, 3);
        makeQuestion($operand, $a, $b, $userName);
    }
    line("Congratulations, {$userName}!");
}

function makeQuestion(int $operand, int $a, int $b, string $userName)
{
    switch ($operand) {
        case 1:
            $correctAnswer = $a + $b;
            $correctAnswer = strval($correctAnswer);
            line("Question: {$a} + {$b}");
            line("Your answer: ", false);
            $userAnswer = getSTDIN();
            isCorrectAnswer($userAnswer, $correctAnswer, $userName);
            break;
        case 2:
            $correctAnswer = $a - $b;
            $correctAnswer = strval($correctAnswer);
            line("Question: {$a} - {$b}");
            line("Your answer: ", false);
            $userAnswer = getSTDIN();
            isCorrectAnswer($userAnswer, $correctAnswer, $userName);
            break;
        case 3:
            $correctAnswer = $a * $b;
            $correctAnswer = strval($correctAnswer);
            line("Question: {$a} * {$b}");
            line("Your answer: ", false);
            $userAnswer = getSTDIN();
            isCorrectAnswer($userAnswer, $correctAnswer, $userName);
            break;
    }
}
