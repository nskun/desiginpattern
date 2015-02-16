<?php
require_once '/Builder.php';
/**
 * Description of TextBuilder
 *
 * @author nskun
 */
class TextBuilder extends Builder{
    private $buffer = "";
    const CRLF = '<br>';
    public function makeTitle($title) {
        $this->buffer .= "=======================================" . $this::CRLF;
        $this->buffer .= "「" . $title . "]";
        $this->buffer .= $this::CRLF;
    }
    public function makeString($str) {
        $this->buffer .= "" . $str . $this::CRLF;
        $this->buffer .= $this::CRLF;
    }
    public function makeItems(array $item) {
        for ($i = 0; $i < count($item); $i++) {
            $this->buffer .= " ・" . $item[$i] . $this::CRLF;
        }
        $this->buffer .= $this::CRLF;
    }
    public function close() {
        $this->buffer .= "=======================================" . $this::CRLF;
    }
    public function getResult() { 
        return $this->buffer;
    }
}
