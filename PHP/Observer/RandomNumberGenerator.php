<?php
require_once './NumberGenerator.php';
/**
 * Description of RandomNumberGenerator
 *
 * @author nskun
 */
class RandomNumberGenerator extends NumberGenerator{
    private $number;
    public function getNumber() {
        return $this->number;
    }
    public function execute() {
        for($i = 0; $i < 20; $i++) {
            $this->number = rand(0, 50);
            $this->notifyObservers();
        }
    }
}
