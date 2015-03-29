<?php
require_once '/DecoratorBorder.php';
require_once '/DecoratorDisplay.php';
/**
 * Description of DecoratorUpDownBorder
 *
 * @author nskun
 */
class DecoratorUpDownBorder extends DecoratorBorder {
    private $borderChar = null;
    
    public function __construct($display, $ch) {
        parent::__construct($display);
        $this->borderChar = $ch;
    }
    
    public function getColumns() {
        return $this->display->getColumns();
    }
    
    public function getRows() {
        return 1 + $this->display->getRows() + 1;
    }
    
    public function getRowText($row) {
        if ($row == 0 || $row == $this->getRows() - 1) {
            return $this->makeLine($this->borderChar, $this->getColumns());
        } else {
            return $this->display->getRowText($row - 1);
        }
    }

    public function makeLine($ch, $count) {
        $buf = '';
        for ($i = 0; $i < $count; $i++) {
            $buf .= $ch;
        }
        return $buf;
    }
}