<?php
/**
 * Description of TablePage
 *
 * @author nskun
 */
class TablePage extends Page {
    public function __construct($title, $author) {
        parent::__construct($title, $author);
    }
    public function makeHTML() {
        $buffer  = "<html><head><title>" . $this->title . "</title></head>\n";
        $buffer .= "<body>\n";
        $buffer .= "<h1>" . $this->title . "</h1>\n";
        $buffer .= "<table width=\"80%\" border=\"3\">\n";
        
        $it = $this->content->getIterator();
        while($it->valid()) {
            $item = $it->current();
            $buffer .= "<tr>" . $item->makeHTML() . "</tr>";
            $it->next();
        }
        
        $buffer .= "</table>\n";
        $buffer .= "<hr><address>" . $this->author . "</address>";
        $buffer .= "</body></html>\n";
        return $buffer;
    }
}
