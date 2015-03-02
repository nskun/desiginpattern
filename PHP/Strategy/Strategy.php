<?php
/**
 *
 * @author nskun
 */
interface Strategy {
    public function nextHand();
    public function study($win);
    
}
