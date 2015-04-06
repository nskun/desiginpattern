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
        for ($obj = $this; true; $obj = $obj->next) {
            if ($obj->resolve($trouble)) {
                $obj->done($trouble);
                break;
            } elseif ($obj->next == null) {
                $obj->fail($trouble);
                break;
            }
        }
    }
    public function toString() {
        return "[" . $this->name . "]";
    }
    protected abstract function resolve($trouble);
    protected function done($trouble) {
        print $trouble->toString() . " is resolved by " . $this->toString() . ".<br>";
    }
    protected function fail($trouble){
        print $trouble->toString() . "cannot be resolved.<br>";
    }
}
