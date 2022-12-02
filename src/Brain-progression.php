<?php

namespace BrainGames\Brain\progression;

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use function BrainGames\Cli\greetings;
use function BrainGames\Cli\line;

function brainProgression()
{
    $userName = greetings();
    $count = 0;
    for ($i = 0; $i < 3; $i++) {
        $size = rand(5, 10);
        $increase  = rand(2, 10);
        $progression[0] = $increase;
        $hidenNum = rand(0, $size - 1);
        for ($j = 1; $j < $size; $j++) {
            $progression[$j] = $progression[$j - 1] + $increase;
        }
        $answer = $progression[$hidenNum];
        $progression[$hidenNum] = '..';
        line("What number is missing in the progression?");
        line("Question: ", false);
        foreach ($progression as $item) {
            line("{$item} ", false);
        }
        $progression = [];
        line("");
        line("Your answer: ", false);
        $userAnswer = trim(fgets(STDIN));
        if ($userAnswer == $answer) {
            line("Correct!");
            $count++;
        } else {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$answer}'.");
            line("Let`s try again, {$userName}");
            break;
        }
    }
    if ($count === 3) {
        line("Congratulations, {$userName}!");
    }
}
brainProgression();