<?php

namespace BrainGames\Brain\prime;

use function BrainGames\Cli\greetings;
use function BrainGames\Cli\line;
use function BrainGames\Cli\isPrime;
use function BrainGames\Cli\isCorrectAnswer;
use function BrainGames\Cli\getSTDIN;
use function BrainGames\Cli\showTask;

function brainPrime()
{
    $userName = greetings();
    showTask('prime');
    for ($i = 0; $i < 3; $i++) {
        $primeNum = rand(2, 103);
        line("Question: {$primeNum}");
        line("Your answer: ", false);
        $correctAnswer = isPrime($primeNum);
        $userAnswer = getSTDIN();
        isCorrectAnswer($userAnswer, $correctAnswer, $userName);
    }
    line("Congratulations, {$userName}!");
}
