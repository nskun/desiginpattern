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
        require_once '/BookShelf.php';
        require_once '/Book.php';
        $bookShelf = new bookShelf(4);
        $bookShelf->appendBook(new book("Around the World in 80 Days"));
        $bookShelf->appendBook(new book("Bible"));
        $bookShelf->appendBook(new book("Cinderella"));
        $bookShelf->appendBook(new book("Daddy-Long-Legs"));
        $it = $bookShelf->iterator();
        while ($it->hasNext()){
            $book = $it->next();
            print $book->getName().'<BR>';
        }
        ?>
    </body>
</html>
