<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '/DecoratorStringDisplay.php';
        $md = new Decorator122MultiStringDisplay();
        $md->add("おはようございます。");
        $md->add("こんにちは。");
        $md->add("おやすみなさい、また明日。");
        $md->show();
        
        $d1 = new Decorator122SideBorder($md, "#");
        $d1->show();
        
        $d2 = new Decorator122FullBorder($md);
        $d2->show();
        
        ?>
    </body>
</html>