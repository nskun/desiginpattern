<?php
require_once '/Hand.php';
/**
 * Description of ProbStrategy
 *
 * @author nskun
 */
class RandomStrategy implements Strategy{
    public function __construct($seed) {
        srand($seed);
    }
    public function nextHand() {
        $handvalue = rand(0, 2);
        return Hand::getHand($handvalue);
    }
    public function study($win) {
        return;
    }
}
