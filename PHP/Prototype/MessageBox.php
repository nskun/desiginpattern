<?php
require_once '/Product.php';
/**
 * Description of MessageBox
 *
 * @author nskun
 */
class MessageBox implements Product{
    private $decochar;
    const CRLF = '<br>';
    public function __construct($decochar) {
        $this->decochar = htmlspecialchars($decochar);
    }

    public function MyUse($s) {
        $length = strlen($s);
        for ($i = 0; $i < $length + 4; $i++){
            print $this->decochar;
        }
        print "" . $this::CRLF;
        print $this->decochar . " " . $s . " " .$this->decochar . $this::CRLF;
        for ($i = 0; $i < $length + 4; $i++){
            print $this->decochar;
        }
        print "" . $this::CRLF;
    }

    public function createClone() {
        return clone $this;
    }

}
