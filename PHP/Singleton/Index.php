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
        require_once '/Singleton.php';
        CONST CRLF = '<br>';
        print 'Start.' . CRLF;
        $obj1 = Singleton::getInstance();
        $obj2 = Singleton::getInstance();
        if ($obj1 == $obj2) {
            print('$obj1と$obj2は同じインスタンスです。'. CRLF);
        } else {
            print('$obj1と$obj2は同じインスタンスではありません。' . CRLF);
        }
        print 'End.';
        
        ?>
    </body>
</html>
