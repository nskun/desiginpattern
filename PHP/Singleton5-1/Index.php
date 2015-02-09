<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '/TicketMaker.php';
        $obj = TicketMaker::getInstance();
        print $obj->getNextTicketNumber();
        print $obj->getNextTicketNumber();
        print $obj->getNextTicketNumber();
        print $obj->getNextTicketNumber();
        ?>
    </body>
</html>
