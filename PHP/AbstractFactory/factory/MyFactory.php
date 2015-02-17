<?php
require_once '/listfactory/ListFactory.php';
/**
 * Description of Factory
 *
 * @author nskun
 */
abstract class MyFactory {
    public static function getFactory($classname) {
        try {
            $factory = new $classname();
        } catch (Exception $ex) {
            print $ex->getMessage();
        }
        return $factory;
    }
    public abstract function createLink($caption, $url);
    public abstract function createTray($caption);
    public abstract function createPage($title, $author);
}