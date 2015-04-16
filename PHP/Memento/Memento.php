<?php
/**
 * Description of Memento
 *
 * @author nskun
 */
class Memento {
    public $money;
    public $fruits;
    public function getMoney() {
        return $this->money;
    }
    public function __construct($money) {
        $this->money = $money;
        $this->fruits = new ArrayObject();
    }
    public function addFruit($fruit) {
        $this->fruits->append($fruit);
    }
    public function getFuits() {
        return clone $this->fruits;
    }
}
