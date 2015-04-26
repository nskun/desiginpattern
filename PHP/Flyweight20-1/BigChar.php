<?php
/**
 * Description of BigChar
 *
 * @author nskun
 */
class BigChar {
    private $charname;
    private $fontdata;
    public function __construct($charname) {
        $this->charname = $charname;
        $this->fontdata = file_get_contents("big" . $charname . ".txt");
    }
    public function BigCharPrint() {
        print $this->fontdata;
    }
}
