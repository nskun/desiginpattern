<?php
/**
 * Description of CountDisplay
 *
 * @author nskun
 */
class CountDisplay extends Display{
    public function __construct($impl) {
        parent::__construct($impl);
    }
    public function multiDisplay($times) {
        $this->open();
        for($i = 0; $i < $times; $i++) {
            $this->MyPrint();
        }
        $this->close();
    }
}
