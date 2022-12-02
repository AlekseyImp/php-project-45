<?php

namespace BrainGames\Brain\prime;

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use function BrainGames\Cli\greetings;
use function BrainGames\Cli\line;
use function BrainGames\Cli\isPrime;

function brainPrime()
{
    $userName = greetings();
    $count = 0;
    for ($i = 0; $i < 3; $i++) {
        $primeNum = rand(2, 103);
        $answer = '';
        line("Answer 'yes' if given number is prime. Otherwise answer 'no'.");
        line("Question: {$primeNum}");
        line("Your answer: ", false);
        $userAnswer = trim(fgets(STDIN));
        if (isPrime($primeNum)) {
            $answer = 'yes';
            if ($answer == $userAnswer) {
                line("Correct!");
                $count++;
            } else {
                line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$answer}'");
                line("Let`s try again, {$userName}!");
                break;
            }
        } else {
            $answer = 'no';
            if ($answer == $userAnswer) {
                line("Correct!");
                $count++;
            } else {
                line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$answer}'");
                line("Let`s try again, {$userName}!");
                break;
            }
        }
    }
    if ($count === 3) {
        line("Congratulations, {$userName}");
    }
}
