<?php
/**
 * Description of DecoratorFullBorder
 *
 * @author nskun
 */
class DecoratorFullBorder extends DecoratorBorder {
    public function __construct($display) {
        parent::__construct($display);
    }
    public function getColumns() {
        return 1 + $this->display->getColumns() + 1;
    }
    public function getRows() {
        return 1 + $this->display->getRows() + 1;
    }
    public function getRowText($row) {
        if ($row == 0) {
            return "+" . $this->makeLine("-", $this->display->getColumns()) . "+";
        } else if ($row == $this->display->getRows() + 1) {
            return "+" . $this->makeLine("-", $this->display->getColumns()) . "+";
        } else {
            return "|" . $this->display->getRowText($row - 1) . "|";
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
