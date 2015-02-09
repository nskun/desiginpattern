<?php
/**
 * Description of Singleton
 *
 * @author nskun
 */
class Singleton {
    private static $singleton = null;
    CONST CRLF = '<br>';
    
    private function __construct() {
            print 'インスタンスを生成しました。' . self::CRLF;
    }
    public static function getInstance() {
        if (is_null(self::$singleton)) {
            self::$singleton = new self;
        }
        return self::$singleton;
    }
}
