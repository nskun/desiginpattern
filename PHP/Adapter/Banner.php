<?php
/**
 * Description of Banner
 *
 * @author nskun
 */
class Banner {
    private $string;
    CONST CRLF = '<br>';
    public function __construct($string) {
        $this->string = $string;
    }
    public function showWithParen() {
        print "(" . $this->string . ")" . $this::CRLF;
    }
    public function showWithAster() {
        print "*" . $this->string . "*" . $this::CRLF;
    }
}
