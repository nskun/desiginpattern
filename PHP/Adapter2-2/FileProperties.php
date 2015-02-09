<?php
require_once '/FileIO.php';
/**
 * Description of FileProperties
 *
 * @author nskun
 */
class FileProperties implements FileIO{
    const CRLF = '<br>';
    private $key = null;
    private $value = null;
    
    public function __construct() {
        $this->key = new ArrayObject();
        $this->value = new ArrayObject();
        print "#written by FileProperties" . $this::CRLF;
        print "#Wed Apr 21 18:21:00 JST 2004" . $this::CRLF;
    }

    public function readFromFile($filename) {
    }
    public function writeToFile($filename) {
        $KeyIt = $this->key->getIterator();
        $ValueIt = $this->value->getIterator();
        while($KeyIt->valid() && $ValueIt->valid()){
            print $KeyIt->current() . "=" . $ValueIt->current() . $this::CRLF;
            $KeyIt->next();
            $ValueIt->next();
        }
    }
    public function getValue($key) {
    }
    public function setValue($key, $value) {
        $this->key->append($key);
        $this->value->append($value);
    }


}
