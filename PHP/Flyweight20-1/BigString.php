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
    public function __construct($string, $shared = true) {
        if($shared) {
            $this->initShared($string);
        } else {
            $this->initUnshared($string);
        }
    }
    
    private function initShared($string) {
        $factory = BigCharFactory::getInstance();
        for ($i = 0; $i < strlen($string); $i++){
            $this->bigchars[] = $factory->getBigChar(substr($string, $i, 1));
        }
    }
    private function initUnshared($string) {
        $factory = BigCharFactory::getInstance();
        for ($i = 0; $i < strlen($string); $i++){
            $this->bigchars[] = new BigChar(substr($string, $i, 1));
        }
    }
    public function BigStringPrint(){
        for ($i = 0; $i < count($this->bigchars); $i++){
            $this->bigchars[$i]->BigCharPrint();
        }
    }
}