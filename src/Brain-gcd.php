<?php

namespace BrainGames\Brain\gcd;

use function BrainGames\Cli\greetings;
use function BrainGames\Cli\line;
use function BrainGames\Cli\gcd;
use function BrainGames\Cli\isCorrectAnswer;
use function BrainGames\Cli\getSTDIN;
use function BrainGames\Cli\showTask;

function brainGcd()
{
    $userName = greetings();
    showTask('gcd');
    for ($i = 0; $i < 3; $i++) {
        $a = rand(1, 100);
        $b = rand(1, 50);
        $correctAnswer = gcd($a, $b);
        line("Question: {$a} {$b}");
        line("Your answer: ", false);
        $userAnswer = getSTDIN();
        isCorrectAnswer($userAnswer, $correctAnswer, $userName);
    }
    line("Congratulations, {$userName}!");
}
