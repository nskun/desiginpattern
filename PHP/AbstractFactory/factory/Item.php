<?php
/**
 * Description of Item
 *
 * @author nskun
 */
abstract class Item {
    protected $caption = null;
    public function __construct($caption) {
        $this->caption = $caption;
    }
    public abstract function makeHTML();
}
