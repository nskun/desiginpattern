<?php
require_once '/Entry.php';
/**
 * Description of Directory
 *
 * @author nskun
 */
class MyDirectory extends Entry{
    private $name;
    private $dir;
    
    public function __construct($name) {
        $this->name = $name;
        $this->dir = new ArrayObject();
    }

    public function getName() {
        return $this->name;
    }

    public function getSize() {
        $size = 0;
        $it = $this->iterator();
        while($it->valid()) {
            $entry = $it->current();
            $size += $entry->getSize();
            $it->next();
        }
        return $size;
    }
    public function add(Entry $entry) {
        $this->dir->append($entry);
        return $this;
    }
    public function iterator() { 
        return $this->dir->getIterator();
    }
    public function accept(Visitor $v) {
        $v->visit($this);
    }


}
