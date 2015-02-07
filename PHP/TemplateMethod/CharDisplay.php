<?php
require_once '/AbstractDisplay.php';
/**
 * Description of CharDisplay
 *
 * @author shain
 */
class CharDisplay extends AbstractDisplay{
    private $ch;
    function __construct($ch) {
        $this->ch = $ch;
    }

    public function open() {
        print("&lt;&lt;");
    }

    public function printf() {
        print($this->ch);
    }

    public function close() {
        print("&gt;&gt;");
    }
}
