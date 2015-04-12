<?php
require_once './NumberGenerator.php';
/**
 * Description of IncrementalNumberGenerator
 *
 * @author nskun
 */
class IncrementalNumberGenerator extends NumberGenerator{
    private $start;
    private $end;
    private $inc;
    public function __construct($start, $end, $inc){
        parent::__construct();
        $this->start = $start;
        $this->end   = $end;
        $this->inc   = $inc;
    }
    public function getNumber() {
        return $this->number;
    }
    public function execute() {
        for($i = $this->start; $i < $this->end; $i += $this->inc) {
            $this->number = $i;
            $this->notifyObservers();
        }
    }
}
