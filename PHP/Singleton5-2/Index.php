<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '/Triple.php';
        try {
            $obj1 = Triple::getInstance(0);
            $obj5 = Triple::getInstance(0);
            $obj2 = Triple::getInstance(1);
            $obj3 = Triple::getInstance(2);
            $obj4 = Triple::getInstance(3);
        } catch (Exception $ex) {
            print $ex->getMessage();
        }
        ?>
    </body>
</html>
