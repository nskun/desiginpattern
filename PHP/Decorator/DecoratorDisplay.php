<?php
/**
 * Description of DecoratorDisplay
 *
 * @author nskun
 */
abstract class DecoratorDisplay {
    abstract public function getColumns();
    abstract public function getRows();
    abstract public function getRowText($row);
    public final function show(){
        for ($i = 0; $i < $this->getRows(); $i++) {
            print $this->getRowText($i) . "<br>";
        }
        print '<br>';
    }
}
