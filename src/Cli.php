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
function prompt($string)
{
    echo "$string ";
    $userName = trim(fgets(STDIN));
    return $userName;
}
function greetings()
{
    line("Welcome to the Brain Game!");
    line("May I have your name? ");
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
