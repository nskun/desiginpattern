<?php
/**
 * Description of OddSupport
 *
 * @author nskun
 */
class OddSupport extends Support {
    public function __construct($name) {
        parent::__construct($name);
    }
    protected function resolve($trouble) {
        if ($trouble->getNumber() % 2 == 1) {
            return true;
        } else {
            return false;
        }
    }
}