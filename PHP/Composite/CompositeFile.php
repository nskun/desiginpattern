<?php
require_once '/CompositeEntry.php';
/**
 * Description of CompositeFile
 *
 * @author nskun
 */
class CompositeFile extends CompositeEntry{
    private $name;
    private $size;
    public function __construct($name, $size) {
        $this->name = $name;
        $this->size = $size;
    }
    public function getName() {
        return $this->name;
    }

    public function getSize() {
        return $this->size;
    }

    public function printList($prefix = "") {
        print $prefix . '/' . $this->toString() . '<br>';
    }

}
