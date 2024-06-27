<?php
namespace Yatzy;

class YatzyGame {
    private $turn;
    private $dice;
    private $keep;

    public function __construct() {
        $this->turn = 0;
        $this->dice = array_fill(0, 5, 0);
        $this->keep = array_fill(0, 5, false);
    }

    public function getTurn() {
        return $this->turn;
    }

    public function rollDice() {
        if ($this->turn >= 3) {
            throw new \Exception("There are no rolls left for this turn");
        }

        $this->turn++;
        for ($i = 0; $i < 5; $i++) {
            if (!$this->keep[$i]) {
                $this->dice[$i] = rand(1, 6);
            }
        }
        return $this->dice;
    }

    public function keepDice($index) {
        if ($index < 0 || $index > 4) {
            throw new \Exception("Invalid index");
        }
        $this->keep[$index] = true;
    }

    public function resetTurn() {
        $this->turn = 0;
        $this->keep = array_fill(0, 5, false);
    }

    public function getDice() {
        return $this->dice;
    }

    public function getKeep() {
        return $this->keep;
    }
}
