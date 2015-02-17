<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '/factory/MyFactory.php';
        require_once '/tablefactory/TableFactory.php';
        $factory = MyFactory::getFactory("ListFactory");
        $factory = MyFactory::getFactory("TableFactory");
        $asahi = $factory->createLink("朝日新聞", "http://www.asahi.com/");
        $yomiuri = $factory->createLink("読売新聞", "http://www.yomiuri.co.jp/");
        
        $us_yahoo = $factory->createLink("Yahoo!", "http://www.yahoo.com/");
        $jp_yahoo = $factory->createLink("Yahoo!Japan", "http://www.yahoo.co.jp/");
        $excite = $factory->createLink("Excite", "http://www.excite.com/");
        $google = $factory->createLink("Google", "http://www.google.com/");
        
        $traynews = $factory->createTray("新聞");
        $traynews->add($asahi);
        $traynews->add($yomiuri);
        
        $trayyahoo = $factory->createTray("Yahoo!");
        $trayyahoo->add($us_yahoo);
        $trayyahoo->add($jp_yahoo);
        
        $traysearch = $factory->createTray("サーチエンジン");
        $traysearch->add($trayyahoo);
        $traysearch->add($excite);
        $traysearch->add($google);
        
        $page = $factory->createPage("Linkpage", "結城 浩");
        $page->add($traynews);
        $page->add($traysearch);
        $page->output();
        
        ?>
    </body>
</html>
