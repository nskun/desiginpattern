<?php
/**
 * Description of Builder
 *
 * @author nskun
 */
abstract class Builder {
    private $initialize = false;
    public function makeTitle($title) {
        if (!$this->initialize) {
            $this->titleBuild($title);
            $this->initialize = true;
        }
    }
    public function makeString($str){
        if($this->initialize) {
            $this->stringBuild($str);
        }
    }
    public function makeItems(array $item){
        if($this->initialize) {
            $this->itemsBuild($item);
        }
    }
    public function close(){
        if($this->initialize) {
            $this->doneBuild();
        }
    }

    abstract function titleBuild($title);
    abstract function stringBuild($str);
    abstract function itemsBuild(array $item);
    abstract function doneBuild();
}