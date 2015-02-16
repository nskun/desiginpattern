<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '/Director.php';
        require_once '/TextBuilder.php';
        require_once '/HTMLBuilder.php';
        
        $textbuilder = new TextBuilder();
        $director = new Director($textbuilder);
        $director->construct();
        print $textbuilder->getResult();

        $htmlbuilder = new HTMLBuilder();
        $director = new Director($htmlbuilder);
        $director->construct();
        print $htmlbuilder->getResult() . "が作成されました。" . "<br>";
        ?>
    </body>
</html>
