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
    public function __construct() {
        $this->owners = new ArrayObject();
    }
    protected function createProduct($owner) {
        return new IDCard($owner);
    }
    protected function registerProduct(Product $product) {
        $this->owners->append($product->getOwner());
    }
    public function getOwners() {
        return $this->owners;
    }
}
