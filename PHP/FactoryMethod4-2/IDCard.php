<?php
require_once '/Product.php';
/**
 * Description of IDCard
 *
 * @author nskun
 */
class IDCard extends Product{
    private $owner;
    private $sirial;
    CONST CRLF = '<br>';
    public function __construct($owner, $sirial) {
        print $owner . "のカード（" . $sirial . "）を作ります。" . $this::CRLF;
        $this->owner = $owner;
        $this->sirial = $sirial;
    }
    public function MyUse() {
        print $this->owner . "のカード（" . $this->sirial . "）を使います。" . $this::CRLF;
    }
    public function getOwner() {
        return $this->owner;
    }
    public function getSirial() {
        return $this->sirial;
    }
}