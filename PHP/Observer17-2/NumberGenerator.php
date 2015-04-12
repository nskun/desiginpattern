<?php
/**
 * Description of NumberGenerator
 *
 * @author nskun
 */
abstract class NumberGenerator {
    private $observer = null;
    public function __construct() {
        $this->observer = new ArrayObject();
    }
    public function addObserver($observer) {
        $this->observer->append($observer);
    }
    public function deleteObserver($observer) {
        $this->observer->offsetUnset($ovserver);
    }
    public function notifyObservers() {
        $it = $this->observer->getIterator();
        while($it->valid()) {
            $o = $it->current();
            $o->update($this);
            $it->next();
        }
    }
    public abstract function getNumber();
    public abstract function execute();
}