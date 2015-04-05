<?php
/**
 * Description of SpecialSupport
 *
 * @author nskun
 */
class SpecialSupport extends Support{
    private $number;
    public function __construct($name, $number) {
        parent::__construct($name);
        $this->$number = $number;
    }
    protected function resolve($trouble) {
        if($trouble->getNumber() == $this->number) {
            return true;
        } else {
            return false;
        }
    }
}
