<?php
/**
 * Description of Triple
 * 
 * @author shain
 */
class Triple {
    private static $instance = [];
    private static $count = 0;
    CONST CRLF = '<br>';
    
    public function __construct() {
        print (self::$count + 1) . "個目のインスタンスが作成されました。" . $this::CRLF;
        self::$count++;
    }
    public static function getInstance($id) {
        if (3 <= self::$count) {
            throw new Exception('インスタンスの数は３個までしか作成できません。');
        }
        if (! isset(self::$instance[$id])) {
            self::$instance[$id] = new self;
            return self::$instance[$id];
        }
    }
}
