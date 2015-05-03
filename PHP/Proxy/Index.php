<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '/PrinterProxy.php';
        const CRLF = '<br>';
        $p = new PrinterProxy("Alice");
        print "名前は現在" . $p->getPrinterName() . "です。" . CRLF;
        $p->setPrinterName("Bob");
        print "名前は現在" . $p->getPrinterName() . "です。" . CRLF;
        $p->ProxyPrint("Hello, World.");
        ?>
    </body>
</html>
