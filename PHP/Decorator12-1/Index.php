<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '/DecoratorStringDisplay.php';
        require_once '/DecoratorSideBorder.php';
        require_once '/DecoratorFullBorder.php';
        require_once '/DecoratorUpDownBorder.php';
        $b1 = new DecoratorStringDisplay("Hello, world.");
        $b2 = new DecoratorUpDownBorder($b1, '-');
        $b3 = new DecoratorFullBorder($b2, '*');
        
        $b1->show();
        $b2->show();
        $b3->show();
        
        $b4 = new DecoratorFullBorder(
                new DecoratorUpDownBorder(
                        new DecoratorSideBorder(
                                new DecoratorUpDownBorder(
                                        new DecoratorSideBorder(
                                                new DecoratorStringDisplay("こんにちは。")
                                                , '*'
                                                )
                                        , '='
                                        )
                                , '|'
                                )
                        , '/'
                        )
                );
        $b4->show();
        ?>
    </body>
</html>