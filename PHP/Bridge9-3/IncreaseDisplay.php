<?php
/**
 * Description of IncreaseDisplay
 *
 * @author nskun
 */
class IncreaseDisplay extends CountDisplay{
    private $step;
    public function __construct($impl, $step) {
        parent::__construct($impl);
        $this->step = $step;
    }
    public function increaseDisplay($level) {
        $count = 0;
        for($i = 0; $i < $level; $i++) {
            $this->multiDisplay($count);
            $count += $this->step;
        }
    }
}
