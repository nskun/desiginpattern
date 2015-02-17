<?php
require_once '/factory/Link.php';
require_once '/listfactory/ListLink.php';
require_once '/listfactory/ListTray.php';
require_once '/listfactory/ListPage.php';
/**
 * Description of ListFactory
 *
 * @author nskun
 */
class ListFactory extends MyFactory {
    public function createLink($caption, $url) {
        return new ListLink($caption, $url);
    }
    public function createTray($caption) {
        return new ListTray($caption);
    }
    public function createPage($title, $author) {
        return new ListPage($title, $author);
    }
}
