<?php
require_once './Observer.php';
/**
 * Description of DigitOvserver
 *
 * @author nskun
 */
class DigitOvserver implements Observer{
    public function update(\NumberGenerator $generator) {
        print "DigitObserver:" . $generator->getNumber() . "<br>";
        usleep(5);
        @ob_flush();
        @flush();
    }
}
