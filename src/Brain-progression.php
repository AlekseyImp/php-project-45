<?php

namespace BrainGames\Brain\progression;

use function BrainGames\Cli\greetings;
use function BrainGames\Cli\line;
use function BrainGames\Cli\isCorrectAnswer;

function brainProgression()
{
    $userName = greetings();
    $count = 0;
    line("What number is missing in the progression?");
    for ($i = 0; $i < 3; $i++) {
        $size = rand(5, 10);
        $increase  = rand(2, 10);
        $progression[0] = $increase;
        $hidenNum = rand(0, $size - 1);
        for ($j = 1; $j < $size; $j++) {
            $progression[$j] = $progression[$j - 1] + $increase;
        }
        $correctAnswer = $progression[$hidenNum];
        $progression[$hidenNum] = '..';
        printProgression($progression);
        $progression = [];
        line("");
        line("Your answer: ", false);
        $userAnswer = trim(fgets(STDIN));
        isCorrectAnswer($userAnswer, $correctAnswer, $userName);
        $count++;
    }
    if ($count === 3) {
        line("Congratulations, {$userName}!");
    }
}
function printProgression($progression)
{
    line("Question: ", false);
    foreach ($progression as $item) {
        line("{$item} ", false);
    }
}
