<?php

namespace BrainGames\Games\Calculator;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'What is the result of the expression?';

function calculate(int $first, int $second, string $sign)
{
    switch ($sign) {
        case '*':
            return $first * $second;
        case '+':
            return $first + $second;
        case '-':
            return $first - $second;
        default:
            throw new \Exception('Unknown operation symbol ' . $sign);
    }
}

function run()
{
    $gameData = [];
    $signs = ['+', '*', '-'];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $firstOperand = mt_rand(1, 100);
        $secondOperand = mt_rand(1, 100);
        $signNum = array_rand($signs);
        $sign = $signs[$signNum];

        $currentAnswer = (string) calculate($firstOperand, $secondOperand, $sign);
        $currentQuestion = "{$firstOperand} {$sign} {$secondOperand}";

        $gameData[] = [$currentQuestion, $currentAnswer];
    }

    runGame(DESCRIPTION, $gameData);
}
