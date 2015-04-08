<?php
/**
 * Description of Database
 *
 * @author nskun
 */
class Database {
    private function __construct($dbname) {
    }
    public static function getProperties($dbname) {
        $filename = $dbname . ".ini";
        return parse_ini_file($filename);
    }
}