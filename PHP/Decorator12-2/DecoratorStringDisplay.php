<?php
require_once '/DecoratorDisplay.php';
/**
 * Description of StringDisplay
 *
 * @author nskun
 */
class DecoratorStringDisplay extends DecoratorDisplay{
    private $string = null;
    public function __construct($string) {
        $this->string = $string;
    }

    public function getColumns() {
        return strlen($this->string);
    }
    
    public function getRows() {
        return 1;
    }
    
    public function getRowText($row) {
        if ($row == 0) {
            return $this->string;
        } else {
            return null;
        }
    }
}