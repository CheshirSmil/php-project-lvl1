<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function getGcd(int $a, int $b)
{
    while ($a != 0 && $b != 0) {
        if ($a > $b) {
            $a = $a % $b;
        } else {
            $b = $b % $a;
        }
    }

    return $a + $b;
}

function run()
{
    $gameData = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $firstOperand = mt_rand(1, 100);
        $secondOperand = mt_rand(1, 100);

        $answer = (string) getGcd($firstOperand, $secondOperand);
        $question = "{$firstOperand} {$secondOperand}";

        $gameData[] = [$question, $answer];
    }
    runGame(DESCRIPTION, $gameData);
}
