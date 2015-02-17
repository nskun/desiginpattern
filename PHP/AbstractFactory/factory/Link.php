<?php
require_once '/item.php';
/**
 * Description of Link
 *
 * @author nskun
 */
abstract class Link extends Item {
    protected $url = null;
    public function __construct($caption, $url) {
        parent::__construct($caption);
        $this->url = $url;
    }
}
