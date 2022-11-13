<?php

namespace BrainGames\Cli;

function line($string, $userName = '')
{
    echo "{$string}{$userName}\n";
}
function prompt($string)
{
    echo "$string ";
    $userName = trim(fgets(STDIN));
    return $userName;
}
