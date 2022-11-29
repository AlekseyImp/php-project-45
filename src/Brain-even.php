<?php

namespace BrainGames\Brain\even;

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use function BrainGames\Cli\greetings;
use function BrainGames\Cli\line;
function brainEven()
{
    $userName = greetings();
    $count = 0;
    for ($i = 0; $i < 3; $i++) {
        $num = rand(1, 50);
        line("Question: {$num}");
        line("Your answer: ", false);
        $answer = trim(fgets(STDIN));
        if ($num % 2 === 0) {
            if ($answer === 'yes') {
                line("Correct!");
                $count++;
            } else {
                line("{$answer} is wrong answer ;(. Correct answer was 'yes'");
                line("Let's try again, {$userName}!");
                break;
            }
        } else {
            if ($answer === 'no') {
                line("Correct!");
                $count++;
            } else {
                line("{$answer} is wrong answer ;(. Correct answer was 'no'");
                line("Let's try again, {$userName}!");
                break;
            }
        }
    }
    if ($count === 3) {
        line("Congratulations, {$userName}!");
    }
}
