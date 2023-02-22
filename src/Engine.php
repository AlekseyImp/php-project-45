<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function startGame(array $rounds, string $rule): void
{
    line("Welcome to the Brain Games!");
    $userName = prompt("May I have your name? ", "", '');
    line("Hello, {$userName}");
    line($rule);
    foreach ($rounds as $round) {
        line("Question: {$round['question']}");
        $userAnswer = prompt("Your answer");
        if ($userAnswer == $round['correctAnswer']) {
            line("Correct!");
        } else {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$round['correctAnswer']}'");
            line("Let's try again, {$userName}!");
            return ;
        }
    }
    line("Congratulations, {$userName}!");
}
