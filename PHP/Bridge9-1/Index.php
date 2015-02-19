<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '/Display.php';
        require_once '/StringDisplayImpl.php';
        require_once '/CountDisplay.php';
        require_once '/RandomDisplay.php';
        $d1 = new Display(new StringDisplayImpl("Hello, Japan."));
        $d2 = new CountDisplay(new StringDisplayImpl("Hello, World."));
        $d3 = new CountDisplay(new StringDisplayImpl("Hello, Universe."));
        $d4 = new RandomDisplay(new StringDisplayImpl("Hello, Universe."));
        
        $d1->display();
        $d2->display();
        $d3->display();
        $d3->multiDisplay(5);
        $d4->display();
        $d4->randomDisplay();
        ?>
    </body>
</html>
