<?php
/**
 * Description of Hand
 *
 * @author nskun
 */
class Hand {
    const HANDVALUE_GUU = 0;
    const HANDVALUE_CHO = 1;
    const HANDVALUE_PAA = 2;
    private static $HAND = [];
    private static $NAME = array("グー", "チョキ", "パー");
    private $handvalue;
    
    public function __construct($handvalue) {
        $this->handvalue = $handvalue;
    }
    public static function getHand($handvalue) {
        if (!isset(self::$HAND[$handvalue])) {
            self::$HAND[$handvalue] = new self($handvalue);
        }
        return self::$HAND[$handvalue];

    }
    public function isStrongerThan($h) {
        return $this->fight($h) == 1;
    }
    public function isWeekerThan($h){
        return $this->fight($h) == -1;
    }
    private function fight($h) {
        if($this->handvalue == $h->handvalue) {
            return 0;
        } else if(($this->handvalue + 1) % 3 == $h->handvalue) {
            return 1;
        } else {
            return -1;
        }
    }
    public function toString() {
        return self::$NAME[$this->handvalue];
    }
}
