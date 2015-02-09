<?php
/**
 *
 * @author nskun
 */
interface FileIO {
    public function readFromFile($filename);
    public function writeToFile($filename);
    public function setValue($key, $value);
    public function getValue($key);
}
