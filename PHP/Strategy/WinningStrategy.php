<?php
require_once '/Strategy.php';
/**
 * Description of WinningStrategy
 *
 * @author nskun
 */
class WinningStrategy implements Strategy {
    private $won = false;
    private $prevHand;
    public function __construct($seed){
        srand($seed);
    }
    public function nextHand() {
        try {
            if(!$this->won) {
                $this->prevHand = Hand::getHand(rand(0,3));
            }
        } catch (Exception $ex) {
            print $ex->getMessage();
        }
        return $this->prevHand;
    }

    public function study($win) {
        $this->won = $win;
    }

}