<?php
require_once '/Element.php';
/**
 *
 * @author nskun
 */
abstract class Entry implements Element{
    abstract function getName();
    abstract function getSize();
    
    // FileとDirectoryが入ってくるがDirectory以外はエラー
    public function add(Entry $entry) {
        throw new Exception("Directory以外が追加されました。");
    }
    // こちらもaddメソッドと同じ↑
    // FileとDirectoryが入ってくるがDirectory以外はエラー
    public function iterator() {
        throw new Exception("FileTreatmentException()");
    }
    public function toString() {
        return $this->getName() . " (" . $this->getSize() . ")";
    }
}
