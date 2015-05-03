<?php
/**
 * Description of ProxyPrinter
 *
 * @author nskun
 */
class ProxyPrinter {
    private $name;
    const CRLF = '<br>';
    public function __construct($name = null) {
        if(! isset($name)) {
            $this->heavyJob("Printerのインスタンスを作成中");
        } else {
            $this->name = $name;
            $this->heavyJob("Printerのインスタンス(" . $name . "）を作成中");
        }
    }
    public function setPrinterName($name) {
        $this->name = $name;
    }
    public function getPrinterName() {
        return $this->name;
    }
    public function ProxyPrint($string) {
        print "=== " . $this->name . " ===" . self::CRLF;
        print $string;
    }
    private function heavyJob($msg) {
        print $msg . self::CRLF;
        for($i = 0; $i < 5; $i++) {
            print '.';
            usleep(100000);
            flush();
        }
        print '完了。' . self::CRLF;
    }
}
