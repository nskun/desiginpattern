<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '/FileProperties.php';
        $f = new FileProperties();
        try {
            $f->readFromFile('file.txt');
            $f->setValue('year', '2004');
            $f->setValue('month', '4');
            $f->setValue('day', '21');
            $f->writeToFile('newfile.txt');
        } catch (Exception $ex) {
            print $ex;
        }
        ?>
    </body>
</html>
