<?php
/**
 * Description of FacadeHtmlWriter
 *
 * @author nskun
 */
class FacadeHtmlWriter {
    public $writer;
    public function __construct($writer) {
        $this->writer = $writer;
    }
    public function title($title) {
        $this->writer .= "<html>";
        $this->writer .= "<head>";
        $this->writer .= "<title>" . $title . "</title>";
        $this->writer .= "</head>";
        $this->writer .= "<body>\n";
        $this->writer .= "<h1>" . $title . "</h>\n";
    }
    public function paragraph($msg) {
        $this->writer .= "<p>" . $msg . "</p>\n";
    }
    public function link($href, $caption) {
        $this->paragraph("<a href=\"" . $href . "\">" . $caption . "</a>");
    }
    public function mailto($mailaddr, $username) {
        $this->link("mailto:" . $mailaddr, $username);
    }
    public function close() {
        $this->writer .= "</body>";
        $this->writer .= "</html>\n";
    }
}