<?php
/**
 * Description of LimitSupport
 *
 * @author nskun
 */
class LimitSupport extends Support{
    private $limit;
    public function __construct($name, $limit) {
        parent::__construct($name);
        $this->limit = $limit;
    }
    protected function resolve($trouble) {
        if($trouble->getNumber() < $this->limit) {
            return true;
        } else {
            return false;
        }
    }
}