<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once './Gamer.php';
        const CRLF = "<br>";
        $gamer = new Gamer(100);
        $memento = $gamer->createMemento();
        for($i = 0; $i < 100; $i++) {
            print "==== " . $i . CRLF;
            print "現状：" . $gamer->toString() . CRLF;
            
            $gamer->bet();
            
            print "所持金は" . $gamer->getMoney() . "円になりました。";
            if ($gamer->getMoney() > $memento->getMoney()) {
                print "                  （だいぶ増えたので、現在の状態を保存しておこう）" . CRLF;
                $memento = $gamer->createMemento();
            } else if ($gamer->getMoney() < $memento->getMoney() / 2) {
                print "                  （だいぶ減ったので、以前の状態に復帰しよう）" . CRLF;
                $gamer->restoreMemento($memento);
            }
            @ob_flush();
            @flush();
            usleep(100000);
        }
        ?>
    </body>
</html>