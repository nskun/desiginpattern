<?php
require_once '/Builder.php';
/**
 * Description of HTMLBuilder
 *
 * @author nskun
 */
class HTMLBuilder extends Builder{
    private $filename = null;
    const CRLF = '<br>';

    public function titleBuild($title) {
        $this->filename = $title . ".html" . $this::CRLF;

        print htmlspecialchars("<html><head><title>") . $title . htmlspecialchars("</title></head><body>") . $this::CRLF;
        print htmlspecialchars("<h1>") . $title . htmlspecialchars("</h>") . $this::CRLF;
    }
    public function stringBuild($str) {
        print htmlspecialchars("<p>") . $str . htmlspecialchars("</p>") . $this::CRLF;
    }
    public function itemsBuild(array $item) {
        print htmlspecialchars("<ul>") . $this::CRLF;
        for ($i = 0; $i < count($item); $i++) {
            print htmlspecialchars("<li>") . $item[$i] . htmlspecialchars("</li>") . $this::CRLF;
        }
        print htmlspecialchars("</ul>") . $this::CRLF;
    }
    public function doneBuild() {
        print htmlspecialchars("</body></html>") . $this::CRLF;
    }
    public function getResult() {
        return $this->filename;
    }
}
