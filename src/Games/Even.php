<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no"';

function isEven(int $value)
{
    return $value % 2 === 0;
}

function run()
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $randomNum = mt_rand(1, 100);
        $question = (string) $randomNum;
        $answer = isEven($randomNum) ? 'yes' : 'no';
        $gameData[] = [$question, $answer];
    }
    runGame(DESCRIPTION, $gameData);
}
