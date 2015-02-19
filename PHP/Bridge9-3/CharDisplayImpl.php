<?php
/**
 * Description of CharDisplayImpl
 *
 * @author nskun
 */
class CharDisplayImpl extends DisplayImpl {
    private $head;
    private $body;
    private $foot;
    public function __construct($head, $body, $foot) {
        $this->head = $head;
        $this->body = $body;
        $this->foot = $foot;
    }
    public function rawOpen() {
        print $this->head;
    }
    public function rawPrint() {
        print $this->body;
    }
    public function rawClose() {
        print $this->foot . '<br>';
    }
}
