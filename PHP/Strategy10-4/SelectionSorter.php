<?php
require_once '/Sorter.php';
/**
 * Description of SelectionSorter
 *
 * @author nskun
 */
class SelectionCombSorter implements Sorter{
    public function sort(&$data) {
        for($i = 0; $i < count($data); $i++) {
            $min = $i;
            for($j = $i + 1; $j < count($data); $j++) {
                if (strcmp($data[$min], $data[$j]) > 0) {
                    $min = $j;
                }
            }
            $temp = $data[$min];
            $data[$min] = $data[$i];
            $data[$i] = $temp;
        }
    }
}