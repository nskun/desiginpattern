<?php
require_once '/BigChar.php';
require_once '/BigCharFactory.php';
/**
 * Description of BigString
 *
 * @author nskun
 */
class BigString {
    private $bigchars = [];
    public function __construct($string) {
        $factory = BigCharFactory::getInstance();
        for ($i = 0; $i < strlen($string); $i++){
            $this->bigchars[] = $factory->getBigChar(substr($string, $i, 1));
        }
    }
    public function BigStringPrint(){
        for ($i = 0; $i < count($this->bigchars); $i++){
            $this->bigchars[$i]->BigCharPrint();
        }
    }
}