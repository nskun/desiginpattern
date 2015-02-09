<?php
require_once '/MyPrint.php';
require_once '/Banner.php';
/**
 * Description of PrintBanner
 *
 * @author nskun
 */
class PrintBanner extends Banner implements MyPrint{
    public function __construct($string) {
        parent::__construct($string);
    }
    public function printStrong() {
        $this->showWithParen();
    }

    public function printWeak() {
        $this->showWithAster();
    }

}
