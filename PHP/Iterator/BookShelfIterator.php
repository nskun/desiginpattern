<?php
require_once '/IteratorA.php';
/**
 * Description of bookshelfiterator
 *
 * @author nskun
 */
class BookShelfIterator implements IteratorA {
    private $bookShelf;
    private $index;
    public function __construct(bookShelf $bookShelf) {
        $this->bookShelf = $bookShelf;
        $this->index = 0;
    }
    public function hasNext() {
        if($this->index < $this->bookShelf->getLength()) {
            return true;
        } else {
            return false;
        }
    }
    public function next() {
        $book = $this->bookShelf->getBookAt($this->index);
        $this->index++;
        return $book;
    }
}
