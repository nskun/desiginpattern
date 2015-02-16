<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '/Manager.php';
        require_once '/UnderlinePen.php';
        require_once '/MessageBox.php';
        // 準備
        $manager = new Manager();
        $upen = new UnderlinePen("~");
        $mbox = new MessageBox("*");
        $sbox = new MessageBox("/");
        $manager->register("strong message", $upen);
        $manager->register("warning box", $mbox);
        $manager->register("slash box", $sbox);
            
        // 生成
        $p1 = $manager->create("strong message");
        $p1->MyUse("Hello, world.");
        $p2 = $manager->create("warning box");
        $p2->MyUse("Hello, world.");
        $p3 = $manager->create("slash box");
        $p3->MyUse("Hello, world.");
        ?>
    </body>
</html>
