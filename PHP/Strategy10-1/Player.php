<?php
/**
 * Description of Player
 *
 * @author nskun
 */
class Player {
    private $name;
    private $strategy;
    private $wincount;
    private $losecount;
    private $gamecount;
    public function __construct($name, $strategy) {
        $this->name = $name;
        $this->strategy = $strategy;
    }
    public function nextHand() {
        return $this->strategy->nextHand();
    }
    
    public function win() {
        $this->strategy->study(true);
        $this->wincount++;
        $this->gamecount++;
    }
    public function lose() {
        $this->strategy->study(false);
        $this->losecount++;
        $this->gamecount++;
    }
    public function even() {
        $this->gamecount++;
    }
    public function toString() {
        return '[' . $this->name . ':' . $this->gamecount . ' games, ' . $this->wincount . ' win, ' . $this->losecount . ' lose' . ']' . '<br>';
    }
}