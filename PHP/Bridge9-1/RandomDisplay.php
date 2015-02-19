<?php
require_once '/Display.php';
/**
 * Description of RandomDisplay
 *
 * @author nskun
 */
class RandomDisplay extends CountDisplay{
    public function __construct($impl) {
        parent::__construct($impl);
    }
    public function randomDisplay($max) {
        $rand = rand(0, $max);
        $this->multiDisplay($rand);
    }
}
