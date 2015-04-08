<?php
/**
 * Description of DecoratorBorder
 *
 * @author nskun
 */
abstract class DecoratorBorder extends DecoratorDisplay{
    protected $display = null;
    public function __construct($display) {
        $this->display = $display;
    }
}