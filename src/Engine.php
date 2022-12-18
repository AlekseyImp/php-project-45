<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function startGame(string $game, array $arrayOfCorrectAnswers)
{
    $userName = greetings();
    showTask($game);
    foreach ($arrayOfCorrectAnswers as $correctAnswer) {
        foreach ($correctAnswer as $val => $corrAnswer) {
            line("Question: {$val}");
            $userAnswer = prompt("Your answer");
            isCorrectAnswer($userAnswer, $corrAnswer, $userName);
        }
    }
    line("Congratulations, {$userName}!");
}
function showTask(string $game)
{
    switch ($game) {
        case 'even':
            line("Answer \"yes\" if the number is even, otherwise answer \"no\".");
            break;
        case 'calc':
            line("What is the result of the expression?");
            break;
        case 'gcd':
            line("Find the greatest common divisor of given numbers.");
            break;
        case 'prime':
            line("Answer \"yes\" if given number is prime. Otherwise answer \"no\".");
            break;
        case 'progression':
            line("What number is missing in the progression?");
            break;
    }
}
function isCorrectAnswer(string $userAnswer, string $correctAnswer, string $userName)
{
    if ($userAnswer == $correctAnswer) {
        line("Correct!");
    } else {
        line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
        line("Let's try again, {$userName}!");
        exit();
    }
}
function greetings(): string
{
    line("Welcome to the Brain Games!");
    $userName = prompt("May I have your name? ", "Anonim", '');
    line("Hello, {$userName}");
    return $userName;
}
