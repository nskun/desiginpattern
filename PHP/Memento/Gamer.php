<?php
require_once './Memento.php';
/**
 * Description of Gamer
 *
 * @author nskun
 */
class Gamer {
    private $money;
    private $fruits;
    private static $fruitsname;
    const CRLF = "<br>";

    public function __construct($money) {
        $this->money = $money;
        $this->fruits = new ArrayObject();
        self::$fruitsname = array("リンゴ", "ぶどう", "バナナ", "みかん");
    }
    public function getMoney() {
        return $this->money;
    }
    public function bet() {
        $dice = rand(0, 6);
        if ($dice == 1) {
            $this->money += 100;
            print "所持金が増えました。" . self::CRLF;
        } else if ($dice == 2) {
            $this->money /= 2;
            print "所持金が半分になりました。" . self::CRLF;
        } else if ($dice == 6) {
            $f = $this->getFruit();
            print "フルーツ(" . $f . ")を貰いました" . self::CRLF;
            $this->fruits->append($f);
        } else {
            print "何も起こりませんでした。" . self::CRLF;
        }
    }
    public function createMemento() {
        $m = new Memento($this->money);
        
        $it = $this->fruits->getIterator();
        while($it->valid()) {
            $f = $it->current();
            $startsWith = preg_match("/^おいしい/u", $f);
            if(!isset($startsWith[0])) {
                $m->addFruit($f);
            }
            $it->next();
        }
        return $m;
    }
    public function restoreMemento(Memento $memento) {
        $this->money  = $memento->money;
        $this->fruits = $memento->getFuits();
    }
    public function toString() {
        $fruits = [];

        $it = $this->fruits->getIterator();
        while($it->valid()) {
            $fruits[] = $it->current();
            $it->next();
        }
        
        return "[money = " . $this->money . ", fruits = [" . implode(",", $fruits) . "]" . self::CRLF;
    }
    public function getFruit() {
        $prefix = "";
        if(rand(0,1) == 1) {
            $prefix = "おいしい";
        }
        return $prefix . self::$fruitsname[rand(0, count(self::$fruitsname) - 1)];
    }
}