<?php
require_once '/TableLink.php';
require_once '/TableTray.php';
require_once '/TablePage.php';
/**
 * Description of TableFactory
 *
 * @author nskun
 */
class TableFactory extends MyFactory {
    public function createLink($caption, $url) {
        return new TableLink($caption, $url);
    }
    public function createTray($caption) {
        return new TableTray($caption);
    }
    public function createPage($title, $author) {
        return new TablePage($title, $author);
    }
}
