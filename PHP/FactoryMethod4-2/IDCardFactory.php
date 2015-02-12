<?php
require_once '/IDCard.php';
require_once '/Factory.php';
/**
 * Description of IDCardFactory
 *
 * @author nskun
 */
class IDCardFactory extends Factory{
    private $owners = null;
    private $sirial = 0;
    public function __construct() {
        $this->owners = array();
        $this->sirial = 0;
    }
    protected function createProduct($owner) {
        return new IDCard($owner, $this->sirial++);
    }
    protected function registerProduct(Product $product) {
        $this->owners[$product->getSirial()] = $product->getOwner();
    }
}
