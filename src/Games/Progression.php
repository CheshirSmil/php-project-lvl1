<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'What number is missing in the progression?';

function findProgression(int $progressionLength, int $first, int $step)
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
    $missedHideElement = "..";

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $startNum = mt_rand(1, 10);
        $progressionDiff = mt_rand(1, 10);
        $progression = findProgression($progressionLength, $startNum, $progressionDiff);
        $numHideElement = array_rand($progression);
        $currentAnswer = (string) $progression[$numHideElement];
        $progression[$numHideElement] = $missedHideElement;

        $currentQuestion = implode(" ", $progression);

        $gameData[] = [$currentQuestion, $currentAnswer];
    }
    runGame(DESCRIPTION, $gameData);
}