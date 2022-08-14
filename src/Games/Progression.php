<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'What number is missing in the progression?';

function makeProgression(int $progressionLength, int $first, int $step)
{
    $progression = [];
    for ($i = 1; $i <= $progressionLength; $i++) {
        $progression[] = $first + $i * $step;
    }

    return $progression;
}

function run()
{
    $gameData = [];
    $progressionLength = 10;
    $symbolOfHiddenElement = "..";

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $startNum = mt_rand(1, 10);
        $step = mt_rand(1, 10);
        $progression = makeProgression($progressionLength, $startNum, $step);
        $numHideElement = array_rand($progression);
        $answer = (string) $progression[$numHideElement];
        $progression[$numHideElement] = $symbolOfHiddenElement;

        $question = implode(" ", $progression);

        $gameData[] = [$question, $answer];
    }
    runGame(DESCRIPTION, $gameData);
}
