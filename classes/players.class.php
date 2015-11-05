<?php
namespace players;

class player
{
    private $currentScore;
    private $name;
    public $dartsPerTurn = 3;

    /**
     * player constructor.
     */
    public function __construct($name)
    {
        $this->name = $name;
        $this->currentScore = \scoring::$startScore;
    }

    public function getCurrentScore()
    {
        return $this->currentScore;
    }

    public function throwDart($dartValue)
    {
        $this->currentScore = $this->currentScore - $dartValue;
    }
}
