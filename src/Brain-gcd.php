<?php

namespace BrainGames\Brain\gcd;

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use function BrainGames\Cli\greetings;
use function BrainGames\Cli\line;
use function BrainGames\Cli\gcd;

function brainGcd()
{
    $userName = greetings();
    $count = 0;
    for ($i = 0; $i < 3; $i++) {
        $a = rand(1, 100);
        $b = rand(1, 50);
        $answer = gcd($a, $b);
        $userAnswer = 0;
        line("Find the greatest common divisor of given numbers.");
        line("Question: {$a} {$b}");
        line("Your answer: ", false);
        $userAnswer = trim(fgets(STDIN));
        if ($userAnswer == $answer) {
            line("Correct!");
            $count++;
        } else {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$answer}'");
            line("Let`s try again, {$userName}!");
            break;
        }
    }
    if ($count === 3) {
        line("Congratulations, {$userName}");
    }
}
