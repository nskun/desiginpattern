<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '/BigString.php';
        $bs_shared   = new BigString('1234567890', true);
        $bs_unshared = new BigString('1234567890', false);
        $bs_shared->BigStringPrint();
        $bs_unshared->BigStringPrint();
        ?>
    </body>
</html>
