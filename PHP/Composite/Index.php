<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '/CompositeDirectory.php';
        require_once '/CompositeFile.php';
        const CRLF = '<br>';
        try {
            print "Makeing root entries..." . CRLF;
            $rootdir = new CompositeDirectory("root");
            $bindir = new CompositeDirectory("bin");
            $tmpdir = new CompositeDirectory("tmp");
            $usrdir = new CompositeDirectory("usr");
            $rootdir->add($bindir);
            $rootdir->add($tmpdir);
            $rootdir->add($usrdir);
            $bindir->add(new CompositeFile("vi", 10000));
            $bindir->add(new CompositeFile("latex", 20000));
            $rootdir->printList();
            
            print CRLF;
            print "Making user entries..." . CRLF;
            $yuki = new CompositeDirectory("yuki");
            $hanako = new CompositeDirectory("hanako");
            $tomura = new CompositeDirectory("tomura");
            
            $usrdir->add($yuki);
            $usrdir->add($hanako);
            $usrdir->add($tomura);
            
            $yuki->add(new CompositeFile("diary.html", 100));
            $yuki->add(new CompositeFile("Composite.java", 200));
            $hanako->add(new CompositeFile("memo.tex", 300));
            $tomura->add(new CompositeFile("game.doc", 400));
            $tomura->add(new CompositeFile("junk.mail", 500));
            $rootdir->printList();
        } catch (Exception $ex) {
            $ex->getMessage();
        }
        
        ?>
    </body>
</html>
