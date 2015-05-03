<?php
/**
 *
 * @author nskun
 */
interface ProxyPrintable {
    abstract function setPrinterName($name);
    abstract function getPrinterName();
    abstract function ProxyPrint($string);
}