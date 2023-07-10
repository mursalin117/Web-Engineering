<?php
    namespace Bookstore\Domain;

    class Book {
        public $isbn;
        public $title;
        public $author;
        public $available;

        public function __construct(int $isbn, string $title, string $author, int $available = 0) {
            $this->isbn = $isbn;
            $this->title = $title;
            $this->author = $author;
            $this->available = $available;
        }

        public function __toString() {
            $result = 'Book Name: ' . $this->title . '<br> Author: ' . $this->author . '<br>ISBN: ' . $this->isbn . '<br>Available: ' . $this->available;
            return $result;
        }
    }
?>