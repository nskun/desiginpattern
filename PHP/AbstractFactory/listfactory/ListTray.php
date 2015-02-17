<?php
require_once '/factory/Tray.php';
/**
 * Description of ListTray
 *
 * @author nskun
 */
class ListTray extends Tray{
    public function __construct($caption) {
        parent::__construct($caption);
    }
    public function makeHTML() {
        $buffer  = "<li>\n";
        $buffer .= $this->caption . "\n";
        $buffer .= "<ul>\n";
        $it = $this->tray->getIterator();
        while($it->valid()){
            $item = $it->current();
            $buffer .= $item->makeHTML();
            $it->next();
        }
        $buffer .= "</ul>\n";
        $buffer .= "</li>\n";
        return $buffer;
    }
}
