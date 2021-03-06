<?php

namespace BrainGames\Engine;

use function \cli\line;
use function \cli\prompt;

const COUNT_OF_QUESTIONS = 3;

function playGame($gameDesctiption, $getAnswerAndQuestionData)
{
    line('Welcome to the Brain Games!');
    line($gameDesctiption);
    $name = prompt('May I have your name?');
    line("Hello, $name!\n");

    for ($i = 1; $i <= COUNT_OF_QUESTIONS; $i++) {
        [$question, $correctAnswer] = $getAnswerAndQuestionData();
        line("Question: $question");
        $answer = prompt('Your answer');

        if ($correctAnswer == $answer) {
            line('Correct!');
        } else {
            line("$answer is wrong answer ;(. Correct answer was $correctAnswer");
            return;
        }
    }
    line("Congratulations, $name!");
}
