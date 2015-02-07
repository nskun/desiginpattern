<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '/MyDirectory.php';
        require_once '/File.php';
        require_once '/ListVisitor.php';
        try {
            print "Making root entries...<BR>";
            $rootdir = new MyDirectory("root");
            $bindir  = new MyDirectory("bin");
            $tmpdir  = new MyDirectory("tmp");
            $usrdir  = new MyDirectory("usr");
            $rootdir->add($bindir);
            $rootdir->add($tmpdir);
            $rootdir->add($usrdir);
            $bindir->add(new File("vi", 10000));
            $bindir->add(new File("latex", 20000));
            $rootdir->accept(new ListVisitor());
            
            print "<BR>";
            print "Making user entries...<BR>";
            $yuki   = new MyDirectory("yuki");
            $hanako = new MyDirectory("hanako");
            $tomura = new MyDirectory("tomura");
            
            $usrdir->add($yuki);
            $usrdir->add($hanako);
            $usrdir->add($tomura);
            
            $yuki->add(new File("diary.html", 100));
            $yuki->add(new File("Composite.java", 200));
            $hanako->add(new File("memo.tex", 300));
            $hanako->add(new File("game.doc", 400));
            $hanako->add(new File("junk.mail", 500));
            
            $rootdir->accept(new ListVisitor());
        } catch (Exception $ex) {
            print("何かがおかしい");
        }
        
        ?>
    </body>
</html>
