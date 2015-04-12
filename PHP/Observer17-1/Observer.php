<?php
require_once './NumberGenerator.php';
/**
 *
 * @author nskun
 */
interface Observer {
    public function update(NumberGenerator $generator); 
}
