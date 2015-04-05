<?php
/**
 * Description of Trouble
 *
 * @author nskun
 */
class Trouble {
    private $number;
    public function __construct($number) {
        $this->number = $number;
    }
    public function getNumber() {
        return $this->number;
    }
    public function toString(){
        return "[Trouble " . $this->number . "]";
    }
}
