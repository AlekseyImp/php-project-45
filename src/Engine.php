<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const NUMBER_OF_ROUNDS = 3;

function startGame(array $round, string $question): void
{
    line("Welcome to the Brain Games!");
    $userName = prompt("May I have your name? ", "", '');
    line("Hello, {$userName}");
    line($question);
    foreach ($round as $key => $val) {
        line("Question: {$val['question']}");
        $userAnswer = prompt("Your answer");
        if ($userAnswer === $val['correctAnswer']) {
            line("Correct!");
        } else {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$val['correctAnswer']}'");
            line("Let's try again, {$userName}!");
            return ;
        }
    }
    line("Congratulations, {$userName}!");
}
