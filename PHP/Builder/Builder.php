<?php
/**
 * Description of Builder
 *
 * @author nskun
 */
abstract class Builder {
    abstract function makeTitle($title);
    abstract function makeString($str);
    abstract function makeItems(array $item);
    abstract function close();
}