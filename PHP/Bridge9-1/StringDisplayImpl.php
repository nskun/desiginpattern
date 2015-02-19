<?php
require_once '/DisplayImpl.php';
/**
 * Description of StringDisplayImpl
 *
 * @author nskun
 */
class StringDisplayImpl extends DisplayImpl{
    private $string;
    private $width;
    const CRLF = '<br>';
    function __construct($string) {
        $this->string = $string;
        $this->width = strlen($string);
    }
    public function rawOpen() {
        $this->printLine();
    }
    public function rawPrint() {
        print '|' . $this->string . '|' . $this::CRLF;
    }
    public function rawClose() {
        $this->printLine();
    }
    private function printLine() {
        print '+';
        for ($i = 0; $i < $this->width; $i++) {
            print '-';
        }
        print '+' . $this::CRLF;
    }
}
