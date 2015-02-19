<?php
/**
 * Description of Display
 *
 * @author nskun
 */
class Display {
    private $impl = null;
    public function __construct($impl) {
        $this->impl = $impl;
    }
    public function open() {
        $this->impl->rawOpen();
    }
    public function MyPrint() {
        $this->impl->rawPrint();
    }
    public function close() {
        $this->impl->rawClose();
    }
    public function display() {
        $this->open();
        $this->MyPrint();
        $this->close();
    }
}
