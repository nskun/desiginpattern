<?php
require_once '/Display.php';
/**
 * Description of RandomDisplay
 *
 * @author nskun
 */
class RandomDisplay extends Display{
    public function __construct($impl) {
        parent::__construct($impl);
    }
    public function randomDisplay() {
        $this->open();
        $rand = rand(0, 10);
        for($i = 0; $i < $rand; $i++) {
            $this->MyPrint();
        }
        $this->close();
    }
}
