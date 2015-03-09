<?php
require_once '/CompositeEntry.php';
/**
 * Description of CompositeDirectory
 *
 * @author nskun
 */
class CompositeDirectory extends CompositeEntry{
    private $name;
    private $directory = null;
    public function __construct($name) {
        $this->name = $name;
        $this->directory = new ArrayObject();
    }
    public function getName() {
        return $this->name;
    }
    public function getSize() {
        $size = 0;
        $it = $this->directory->getIterator();
        while($it->valid()) {
            $entry = $it->current();
            $size += $entry->getSize();
            $it->next();
        }
        return $size;
    }
    public function add($entry) {
        $this->directory->append($entry);
        return $this;
    }
    public function printList($prefix = "") {
        print $prefix . "/" . $this->toString();
        $it = $this->directory->getIterator();
        while($it->valid()) {
            $entry = $it->current();
            $entry->printList($prefix . "/" . $this->name);
            $it->next();
        }
    }
}
