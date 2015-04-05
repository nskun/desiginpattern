<?php
/**
 * Description of NoSupport
 *
 * @author nskun
 */
class NoSupport extends Support{
    public function __construct($name) {
        parent::__construct($name);
    }
    protected function resolve($trouble) {
        return false;
    }
}