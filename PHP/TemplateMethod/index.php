<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '/CharDisplay.php';
        require_once '/StringDisplay.php';
        $d1 = new CharDisplay('H');
        $d2 = new StringDisplay("Hello World.");
        $d3 = new StringDisplay("こんにちは。");
        
        $d1->displayf();
        print '<BR>';
        $d2->displayf();
        print '<BR>';
        $d3->displayf();
        ?>
    </body>
</html>
