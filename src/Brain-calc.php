<?php

namespace BrainGames\Brain\calc;

use function BrainGames\Cli\greetings;
use function BrainGames\Cli\line;
use function BrainGames\Cli\isCorrectAnswer;

function brainCalc()
{
    $userName = greetings();
    $count = 0;
    line("What is the result of the expression?");
    for ($i = 0; $i < 3; $i++) {
        $a = rand(1, 20);
        $b = rand(1, 20);
        $operand = rand(1, 3);
        makeQuestion($operand, $a, $b, $userName);
        $count++;
    }
    if ($count === 3) {
        line("Congratulations, {$userName}!");
    }
}

function makeQuestion($operand, $a, $b, $userName)
{
    switch ($operand) {
        case 1:
            $correctAnswer = $a + $b;
            line("Question: {$a} + {$b}");
            line("Your answer: ", false);
            $userAnswer = trim(fgets(STDIN));
            isCorrectAnswer($userAnswer, $correctAnswer, $userName);
            break;
        case 2:
            $correctAnswer = $a - $b;
            line("Question: {$a} - {$b}");
            line("Your answer: ", false);
            $userAnswer = trim(fgets(STDIN));
            isCorrectAnswer($userAnswer, $correctAnswer, $userName);
            break;
        case 3:
            $correctAnswer = $a * $b;
            line("Question: {$a} * {$b}");
            line("Your answer: ", false);
            $userAnswer = trim(fgets(STDIN));
            isCorrectAnswer($userAnswer, $correctAnswer, $userName);
            break;
    }
}
