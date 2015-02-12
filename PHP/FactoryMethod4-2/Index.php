<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '/IDCardFactory.php';
        $factory = new IDCardFactory();
        $card1 = $factory->create("結城浩");
        $card2 = $factory->create("とむら");
        $card3 = $factory->create("佐藤花子");
        $card1->MyUse();
        $card2->MyUse();
        $card3->MyUse();
        ?>
    </body>
</html>
