<?php
require_once '/BookShelfIterator.php';
require_once '/Aggregate.php';

/**
 * Description of bookshelf
 *
 * @author nskun
 */
class BookShelf implements Aggregate{
    private $books = [];
    private $last = 0;
    public function __construct($maxsize) {
//        $this->books = new ArrayObject();
        $this->books = new SplFixedArray($maxsize);
    }
    public function getBookAt($index) {
        return $this->books[$index];
    }
    public function appendBook($book) {
//        $this->books->append($book);
        $this->books[$this->last] = $book;
        $this->last++;
    }
    public function getLength() {
        return $this->last;
    }
    public function iterator() {
        return new BookShelfIterator($this);
    }

}
