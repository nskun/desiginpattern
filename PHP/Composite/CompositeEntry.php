<?php
/**
 * Description of CompositeEntry
 *
 * @author nskun
 */
abstract class CompositeEntry {
    abstract function getName();
    abstract function getSize();
    
    public function MyAdd($entry){
        throw new Exception("FileTreatmentException");
    }
    abstract function printList($prefix = "");

    public function toString() {
        return $this->getName() . '（' . $this->getSize() . '）' . '<br>';
    }
}