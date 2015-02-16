<?php
/**
 * Description of Manager
 *
 * @author nskun
 */
class Manager {
    private $showcase = null;
    public function __construct() {
        $this->showcase = array();
    }
    public function register($name, Product $proto) {
        $this->showcase[$name] = $proto;
    }
    public function create($protoname) {
        $p = $this->showcase[$protoname];
        return $p->createClone();
    }
}
