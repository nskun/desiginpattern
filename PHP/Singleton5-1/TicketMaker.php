<?php
/**
 * Description of TickeMaker
 *
 * @author nskun
 */
class TicketMaker {
    private static $instance = null;
    private $ticket;
    CONST CRLF = '<br>';
    
    public function __construct() {
        $this->ticket = 1000;
    }
    public static function getInstance() {
        if (is_null(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }
    public function getNextTicketNumber(){
        return $this->ticket++ . self::CRLF;
    }
}
