<?php
require_once '/Product.php';
/**
 * Description of IDCard
 *
 * @author nskun
 */
class IDCard extends Product{
    private $owner;
    CONST CRLF = '<br>';
    public function __construct($owner) {
        print $owner . "のカードを作ります。" . $this::CRLF;
        $this->owner = $owner;
    }
    public function MyUse() {
        print $this->owner . "のカードを使います。" . $this::CRLF;
    }
    public function getOwner() {
        return $this->owner;
    }
}