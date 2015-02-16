<?php
require_once '/Product.php';
/**
 * Description of UnderlinePen
 *
 * @author nskun
 */
class UnderlinePen implements Product {
    private $ulchar;
    const CRLF = '<br>';
    public function __construct($ulchar) {
        $this->ulchar = htmlspecialchars($ulchar);
    }
    public function MyUse($s) {
        $length = strlen($s);
        print "\"" . $s . "\"" . $this::CRLF;
        print "" . $this::CRLF;
        for($i = 0; $i < $length; $i++) {
            print $this->ulchar;
        }
        print "" . $this::CRLF;
    }
    public function createClone() {
        return clone $this;
    }

}
