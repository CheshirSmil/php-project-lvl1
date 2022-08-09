<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $num)
{
    if ($num <= 1) {
        return false;
    };

    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }

    return true;
}

function run()
{
    $gameData = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $randomNum = mt_rand(1, 100);
        $answer = isPrime($randomNum) ? 'yes' : 'no';
        $question = (string) $randomNum;
        $gameData[] = [$question, $answer];
    }
    runGame(DESCRIPTION, $gameData);
}
