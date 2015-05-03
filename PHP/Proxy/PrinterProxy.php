<?php
require_once '/ProxyPrinter.php';
/**
 * Description of PrinterProxy
 *
 * @author nskun
 */
class PrinterProxy {
    private $name;
    private $real = null;
    public function __construct($name) {
        $this->name = $name;
    }
    public function setPrinterName($name){
        if (! is_null($this->real)) {
            $this->real->setPrinterName($name);
        }
        $this->name = $name;
    }
    public function getPrinterName() {
        return $this->name;
    }
    public function ProxyPrint($string){
        $this->realize();
        $this->real->ProxyPrint($string);
    }
    private function realize() {
        if (is_null($this->real)) {
            $this->real = new ProxyPrinter($this->name);
        }
    }
}
