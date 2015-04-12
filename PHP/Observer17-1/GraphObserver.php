<?php
/**
 * Description of GraphObserver
 *
 * @author nskun
 */
class GraphObserver implements Observer{
    public function update(\NumberGenerator $generator) {
        print "GraphObserver:";
        $count = $generator->getNumber();
        for($i = 0; $i < $count; $i++) {
            usleep(100000);
            @ob_flush();
            @flush();
            print "*";
        }
        print "<br>";
    }
}
