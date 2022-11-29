<?php

namespace BrainGames\Cli;

function line($string)
{
    echo "{$string}\n";
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
