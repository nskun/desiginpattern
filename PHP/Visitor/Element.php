<?php
/**
 *
 * @author nskun
 */
interface Element {
    public function accept(Visitor $v);
}