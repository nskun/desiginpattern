<?php
/**
 * Description of Support
 *
 * @author nskun
 */
abstract class Support {
    private $name;
    private $next;
    public function __construct($name) {
        $this->name = $name;
    }
    public function setNext($next) {
        $this->next = $next;
        return $next;
    }
    public final function support($trouble) {
        if($this->resolve($trouble)) {
            $this->done($trouble);
        } else if($this->next != null) {
            $this->next->support($trouble);
        } else {
            $this->fail($trouble);
        }
    }
    public function toString() {
        return "[" . $this->name . "]";
    }
    protected abstract function resolve($trouble);
    protected function done($trouble) {
        print $trouble->toString() . " is resolved by " . $this->name . ".<br>";
    }
    protected function fail($trouble){
        print $trouble->toString() . "cannot be resolved.<br>";
    }
}
