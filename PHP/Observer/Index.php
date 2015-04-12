<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once './RandomNumberGenerator.php';
        require_once './DigitOvserver.php';
        require_once './GraphObserver.php';
        set_time_limit(0);
        $generator = new RandomNumberGenerator();
        $observer1 = new DigitOvserver();
        $observer2 = new GraphObserver();
        $generator->addObserver($observer1);
        $generator->addObserver($observer2);
        $generator->execute();
        ?>
    </body>
</html>