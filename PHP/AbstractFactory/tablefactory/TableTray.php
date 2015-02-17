<?php
/**
 * Description of TableTray
 *
 * @author nskun
 */
class TableTray extends Tray {
    public function __construct($caption) {
        parent::__construct($caption);
    }

    public function makeHTML() {
        $buffer  = "<td>";
        $buffer .= "<table width\"100%\" border=\"1\"><tr>";
        $buffer .= "<td bgcolor=\"#cccccc\" align=\"center\" colspan=\"" . count($this->tray) . "\"><b>" . $this->caption . "</b></td>";
        $buffer .= "</tr>\n";
        $buffer .= "<tr>\n";
        
        $it = $this->tray->getIterator();
        while($it->valid()){
            $item = $it->current();
            $buffer .= $item->makeHTML();
            $it->next();
        }
        
        $buffer .= "</tr></table>";
        $buffer .= "</td>";
        
        return $buffer;
    }
}
