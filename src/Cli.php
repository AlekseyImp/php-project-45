<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function brainGames()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name? ', 'Anonim', '');
    line("Hello, %s!", $name);
}
