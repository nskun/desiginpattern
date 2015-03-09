<?php
/**
 * Description of SelectionCombSorter
 *
 * @author nskun
 */
class SelectionSorter implements Sorter{
    public function sort(&$data) {
        $h = count($data) * 10 / 13;
        while (true) {
            $swapCount = 0;
            for ($i = 0; $i + $h < count($data); $i++){
                if(strcmp($data[$i], $data[$i + $h] > 0)) {
                    $temp          = $data[$i];
                    $data[$i]      = $data[$i + $h];
                    $data[$i + $h] = $temp;
                    $swapCount++;
                }
            }
            if ($h == 1) {
                if ($swapCount == 0) {
                    break;
                }
            } else {
                $h = $h * 10 / 13;
            }
        } 
    }
}