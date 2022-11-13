<?php

namespace BrainGames\Brain\even;

function brainEven()
{
    echo "Welcome to the Brain Game!\n";
    echo "May I have your name? ";
    $userName = trim(fgets(STDIN));
    echo "Hello, {$userName}\n";
    echo "Answer 'yes' if the number is even, otherwise answer 'no'.\n";
    $count = 0;
    for ($i = 0; $i < 3; $i++) {
        $num = rand(1, 50);
        echo "Question: {$num}\n";
        echo "Your answer: ";
        $answer = trim(fgets(STDIN));
        if ($num % 2 === 0) {
            if ($answer === 'yes') {
                echo "Correct!\n";
                $count++;
            } else {
                echo "{$answer} is wrong answer ;(. Correct answer was 'yes'\n";
                echo "Let's try again, {$userName}!\n";
                break;
            }
        } else {
            if ($answer === 'no') {
                echo "Correct!\n";
                $count++;
            } else {
                echo "{$answer} is wrong answer ;(. Correct answer was 'no'\n";
                echo "Let's try again, {$userName}!\n";
                break;
            }
        }
    }
    if ($count === 3) {
        echo "Congratulations, {$userName}!\n";
    }
}
