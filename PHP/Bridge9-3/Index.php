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
        require_once '/IncreaseDisplay.php';
        require_once '/CharDisplayImpl.php';
        $d1 = new Display(new StringDisplayImpl("Hello, Japan."));
        $d2 = new CountDisplay(new StringDisplayImpl("Hello, World."));
        $d3 = new CountDisplay(new StringDisplayImpl("Hello, Universe."));
        $d4 = new RandomDisplay(new StringDisplayImpl("Hello, Universe."));
        $d5 = new IncreaseDisplay(new CharDisplayImpl("<", "*", ">"), 1);
        $d6 = new IncreaseDisplay(new CharDisplayImpl("|", "#", "-"), 2);
        
        $d1->display();
        $d2->display();
        $d3->display();
        $d3->multiDisplay(5);
        $d4->display();
        $d4->randomDisplay(10);
        $d5->increaseDisplay(4);
        $d6->increaseDisplay(6);
        ?>
    </body>
</html>
