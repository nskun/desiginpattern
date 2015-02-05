<?php
require_once '/AbstractDisplay.php';
/**
 * Description of StringDisplay
 *
 * @author shain
 */
class StringDisplay extends AbstractDisplay{
    private $string;
    private $width;
    function __construct($string) {
        $this->string = $string;
        $this->width = strlen($string);
    }
    
    public function open() {
        $this->printLine();
    }
    
    public function printf() {
        print("|" . $this->string . "|<BR>");
    }

    public function close() {
        $this->printLine();        
    }
    
    private function printLine() {
        print("+");
        for ($i = 0; $i < $this->width; $i++) {
            print ("-");
        }
        print("+<BR>");
    }
}
