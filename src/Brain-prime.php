<?php

namespace BrainGames\Brain\prime;

use function BrainGames\Cli\greetings;
use function BrainGames\Cli\line;
use function BrainGames\Cli\isPrime;
use function BrainGames\Cli\isCorrectAnswer;

function brainPrime()
{
    $userName = greetings();
    $count = 0;
    line("Answer \"yes\" if given number is prime. Otherwise answer \"no\".");
    for ($i = 0; $i < 3; $i++) {
        $primeNum = rand(2, 103);
        line("Question: {$primeNum}");
        line("Your answer: ", false);
        $correctAnswer = isPrime($primeNum);
        $userAnswer = trim(fgets(STDIN));
        isCorrectAnswer($userAnswer, $correctAnswer, $userName);
        $count++;
    }
    if ($count === 3) {
        line("Congratulations, {$userName}!");
    }
}
