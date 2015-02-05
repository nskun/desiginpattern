<?php
/**
 * Description of AbstractDisplay
 *
 * @author shain
 */
abstract class AbstractDisplay {
    //put your code here
    abstract function open();
    abstract function printf();
    abstract function close();

    final function displayf() {
        $this->open();
        for ($i = 0; $i < 5; $i++) {
            $this->printf();
        }
        $this->close();
    }
}
