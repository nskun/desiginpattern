<?php
require_once '/DecoratorBorder.php';
require_once '/DecoratorDisplay.php';
/**
 * Description of DecoratorSideBorder
 *
 * @author nskun
 */
class DecoratorSideBorder extends DecoratorBorder{
    private $borderChar = null;
    
    public function __construct($display, $ch) {
        parent::__construct($display);
        $this->borderChar = $ch;
    }
    
    public function getColumns() {
        return 1 + $this->display->getColumns() + 1;
    }
    
    public function getRows() {
        return $this->display->getRows();
    }
    
    public function getRowText($row) {
        return $this->borderChar . $this->display->getRowText($row) . $this->borderChar;
    }
}