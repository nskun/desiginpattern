<?php
/**
 * Description of Page
 *
 * @author nskun
 */
abstract class Page {
    protected $title;
    protected $author;
    protected $content;
    const CRLF = '<br>';
    public function __construct($title, $author) {
        $this->content = new ArrayObject();
        $this->title = $title;
        $this->author = $author;
    }
    public function add(Item $item) {
        $this->content->append($item);
    }
    public function output() {
        $filename = $this->title . ".html";
        print $this->makeHTML() . $this::CRLF;
        print $filename . " を作成しました。";
    }
    abstract function makeHTML();
}
