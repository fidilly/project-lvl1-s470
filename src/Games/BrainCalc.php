<?php

namespace BrainGames\Games\BrainCalc;

use function BrainGames\Engine\startGame;

const GAME_DESCRITPION = 'What is the result of the expression?';

function getGameData()
{
    $generator = function () {
        $questionOperandOne = rand(0, 20);
        $questionOperandTwo = rand(0, 20);
        $operators = ['+', '-', '*'];
        $questionOperator = array_rand(array_flip($operators));
        switch ($questionOperator) {
            case '+':
                $result = $questionOperandOne + $questionOperandTwo;
                break;
            case '-':
                $result = $questionOperandOne - $questionOperandTwo;
                break;
            case '*':
                $result = $questionOperandOne * $questionOperandTwo;
                break;
        }
        return ["$questionOperandOne $questionOperator $questionOperandTwo", $result];
    };

    startGame(GAME_DESCRITPION, $generator);
}
