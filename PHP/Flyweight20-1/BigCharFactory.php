<?php
/**
 * Description of BigCharFactory
 *
 * @author nskun
 */
class BigCharFactory {
    private $pool;
    private static $singleton;
    private function __construct() {
    }
    public static function getInstance(){
        if(self::$singleton == null) {
            self::$singleton = new BigCharFactory();
        }
        return self::$singleton;
    }
    public function getBigChar($charname) {
        if(!isset($this->pool[$charname])) {
            $bc = new BigChar($charname);
            $this->pool[$charname] = $bc;
        }
        return $bc;
    }
}
