<?php
use players\player;
use board\board;

$board = new board();

$playerOne = new player("dave");
$playerTwo = new player("jane");

$players = [$playerOne, $playerTwo];
// loop players
foreach ($players as $player) {
    // loop dart throws
    for ($i = 0; $i <= $player->$dartsPerTurn; $i++) {

        $dartValue = $board->dartValue();
        $player->throwDart($dartValue);
    }

}