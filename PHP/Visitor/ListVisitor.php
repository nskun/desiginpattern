<?php
require_once '/Visitor.php';
/**
 * Description of ListVisitor
 *
 * @author shain
 */
class ListVisitor extends Visitor{
    private $currentDir;
    public function __construct() {
        $this->currentDir = "";
    }
    public function visit($visitName) {
        $method = 'visit' . get_class($visitName);
        $this->$method($visitName);
    }
    private function visitFile(File $file) { 
        print htmlentities($this->currentDir . "/" . $file->toString()) . "<BR>";
    }
    private function visitMyDirectory(MyDirectory $directory) {
        print htmlentities($this->currentDir . "/" . $directory->toString()) . "<BR>";
        $savedir = $this->currentDir;
        $this->currentDir = $this->currentDir . "/" . $directory->getName();
        $it = $directory->iterator();
        while($it->valid()) {
            $entry = $it->current();
            $entry->accept($this);
            $it->Next();
        }
        $this->currentDir = $savedir;
    }

}
