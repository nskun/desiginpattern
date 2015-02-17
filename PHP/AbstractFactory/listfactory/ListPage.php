<?php
require_once '/factory/page.php';
/**
 * Description of ListPage
 *
 * @author nskun
 */
class ListPage extends Page {
    public function __construct($title, $author) {
        parent::__construct($title, $author);
    }
    public function makeHTML() {
        $buffer  = "<html><head><title>" . $this->title . "</title></head>\n";
        $buffer .= "<body>\n";
        $buffer .= "<h1>" . $this->title . "</h1>\n";
        $buffer .= "<ul>\n";
        
        $it = $this->content->getIterator();
        while($it->valid()) {
            $item = $it->current();
            $buffer .= $item->makeHTML();
            $it->next();
        }
        $buffer .= "</ul>\n";
        $buffer .= "<hr><address>" . $this->author . "</address>";
        $buffer .= "</body></html>\n";
        return $buffer;
    }
}
