<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '/WinningStrategy.php';
        require_once '/ProbStrategy.php';
        require_once '/RandomStrategy.php';
        require_once '/Player.php';
        require_once '/Hand.php';
        const CRLF = "<br>";
        $seed1 = 1;
        $seed2 = 110;
        $player1 = new Player("Taro", new WinningStrategy($seed1));
        $player2 = new Player("Hana", new RandomStrategy($seed2));
        for ($i = 0; $i < 10000; $i++) {
            $nextHand1 = $player1->nextHand();
            $nextHand2 = $player2->nextHand();
            if ($nextHand1->isStrongerThan($nextHand2)) {
                print "Winner:" . $player1->toString() . CRLF;
                $player1->win();
                $player2->lose();
            } else if($nextHand2->isStrongerThan($nextHand1)) {
                print "Winner:" . $player2->toString() . CRLF;
                $player2->win();
                $player1->lose();
            } else {
                print "Even..." . CRLF;
                $player1->even();
                $player2->even();
            }
            print "Total result:" . CRLF;
            print $player1->toString();
            print $player2->toString();
        }
        ?>
    </body>
</html>
