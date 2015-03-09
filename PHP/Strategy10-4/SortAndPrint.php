<?php
/**
 * Description of SortAndPrint
 *
 * @author nskun
 */
class SortAndPrint {
    public $data = null;
    public $sorter = null;
    public function __construct($data, $sorter) {
        $this->data = $data;
        $this->sorter = $sorter;
    }
    public function execute() {
        $this->myPrint();
        $this->sorter->sort($this->data);
        $this->myPrint();
    }
    public function myPrint() {
        for($i = 0; $i < count($this->data); $i++) {
            print $this->data[$i] . ",";
        }
        print " <br>";
    }
}
