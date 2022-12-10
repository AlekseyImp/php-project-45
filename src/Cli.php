<?php

namespace BrainGames\Cli;

function line($string, $transfer = true)
{
    if ($transfer === true) {
        echo "{$string}\n";
    } else {
        echo "{$string}";
    }
}
function greetings()
{
    line("Welcome to the Brain Games!");
    line("May I have your name? ", false);
    $userName = trim(fgets(STDIN));
    line("Hello, {$userName}");
    return $userName;
}
function gcd($a, $b)
{
    if ($b === 0) {
        return $a;
    } else {
        return gcd($b, $a % $b);
    }
}
function isPrime($num)
{
    $end = round(sqrt($num));
    $count = 0;
    for ($i = 2; $i <= $end; $i++) {
        if ($num % $i === 0) {
            $count++;
        }
    }
    if ($count === 0) {
        return 'yes';
    } else {
        return 'no';
    }
}
function isCorrectAnswer($userAnswer, $correctAnswer, $userName)
{
    if ($userAnswer == $correctAnswer) {
        line("Correct!");
    } else {
        line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
        line("Let's try again, {$userName}!");
        exit();
    }
}
