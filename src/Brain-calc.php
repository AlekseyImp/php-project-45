<?php

namespace BrainGames\Brain\calc;

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use function BrainGames\Cli\greetings;
use function BrainGames\Cli\line;

function brainCalc()
{
    $userName = greetings();
    $count = 0;
    for ($i = 0; $i < 3; $i++) {
        $a = rand(1, 20);
        $b = rand(1, 20);
        $operand = rand(1, 3);
        $userAnswer = 0;
        if ($operand === 1) {
            $corrAnswer = $a + $b;
            line("What is the result of the expression?");
            line("Question: {$a} + {$b}");
            line("Your answer: ", false);
            $userAnswer = trim(fgets(STDIN));
            if ($corrAnswer == $userAnswer) {
                line("Correct!");
                $count++;
            } else {
                line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$corrAnswer}'");
                line("Let`s try again, {$userName}");
                break;
            }
        } elseif ($operand === 2) {
            $corrAnswer = $a - $b;
            line("What is the result of the expression?");
            line("Question: {$a} - {$b}");
            line("Your answer: ", false);
            $userAnswer = trim(fgets(STDIN));
            if ($corrAnswer == $userAnswer) {
                line("Correct!");
                $count++;
            } else {
                line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$corrAnswer}'");
                line("Let`s try again, {$userName}");
                break;
            }
        } elseif ($operand === 3) {
            $corrAnswer = $a * $b;
            line("What is the result of the expression?");
            line("Question: {$a} * {$b}");
            line("Your answer: ", false);
            $userAnswer = trim(fgets(STDIN));
            if ($corrAnswer == $userAnswer) {
                line("Correct!");
                $count++;
            } else {
                line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$corrAnswer}'");
                line("Let`s try again, {$userName}");
                break;
            }
        }
    }
    if ($count === 3) {
        line("Congratulations, {$userName}!");
    }
}
