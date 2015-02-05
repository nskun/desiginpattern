<?php
/**
 * Description of book
 *
 * @author nskun
 */
class book {
    private $name;
    public function __construct($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
}
