<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '/SortAndPrint.php';
        require_once '/SelectionSorter.php';
        require_once '/SelectionCombSorter.php';
        $data = array(
            'Dumpty', 'Bowman', 'Carroll', 'Elfland', 'Alice', 'PHP', 'Microsoft', 'Google', 'Web'
            );
//        $sap = new SortAndPrint($data, new SelectionSorter());
        $sap = new SortAndPrint($data, new SelectionCombSorter());
        $sap->execute();
        ?>
    </body>
</html>
