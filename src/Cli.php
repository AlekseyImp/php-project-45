<?php

namespace BrainGames\Cli;

function line($string, $name = '')
{
    echo $string;
    echo $name;
    echo "\n";
}
function prompt($string)
{
    echo "$string ";
    $name = trim(fgets(STDIN));
    return $name;
}
