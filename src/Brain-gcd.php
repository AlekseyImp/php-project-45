<?php

namespace BrainGames\Brain\gcd;

use function BrainGames\Cli\greetings;
use function BrainGames\Cli\line;
use function BrainGames\Cli\gcd;
use function BrainGames\Cli\isCorrectAnswer;

function brainGcd()
{
    $userName = greetings();
    $count = 0;
    line("Find the greatest common divisor of given numbers.");
    for ($i = 0; $i < 3; $i++) {
        $a = rand(1, 100);
        $b = rand(1, 50);
        $correctAnswer = gcd($a, $b);
        line("Question: {$a} {$b}");
        line("Your answer: ", false);
        $userAnswer = trim(fgets(STDIN));
        isCorrectAnswer($userAnswer, $correctAnswer, $userName);
        $count++;
    }
    if ($count === 3) {
        line("Congratulations, {$userName}");
    }
}
