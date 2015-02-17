<?php
/**
 * Description of Tray
 *
 * @author nskun
 */
abstract class Tray extends Item {
    protected $tray = null;
    public function __construct($caption) {
        $this->tray = new ArrayObject();
        parent::__construct($caption);
    }
    public function add(Item $item) {
        $this->tray->append($item);
    }
}