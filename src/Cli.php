<?php

namespace BrainGames\Cli;

function line(string $string, bool $transfer = true)
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
    $userName = getSTDIN();
    line("Hello, {$userName}");
    return $userName;
}
function gcd(int $a, int $b)
{
    if ($b === 0) {
        return $a;
    } else {
        return gcd($b, $a % $b);
    }
}
function isPrime(int $num)
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
function getSTDIN(): string
{
    $string = fgets(STDIN);
    $string = strval($string);
    return trim($string);
}
function showTask(string $string)
{
    switch ($string) {
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
