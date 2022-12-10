<?php

namespace BrainGames\Brain\even;

use function BrainGames\Cli\greetings;
use function BrainGames\Cli\line;
use function BrainGames\Cli\isCorrectAnswer;
use function BrainGames\Cli\getSTDIN;

function brainEven()
{
    $userName = greetings();
    $count = 0;
    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");
    for ($i = 0; $i < 3; $i++) {
        $num = rand(1, 50);
        line("Question: {$num}");
        line("Your answer: ", false);
        $correctAnswer = getCorrectAnswer($num);
        $userAnswer = getSTDIN();
        isCorrectAnswer($userAnswer, $correctAnswer, $userName);
        $count++;
    }
    if ($count === 3) {
        line("Congratulations, {$userName}!");
    }
}
function getCorrectAnswer(int $num)
{
    if ($num % 2 === 0) {
        return 'yes';
    } else {
        return 'no';
    }
}
