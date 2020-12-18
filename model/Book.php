<?php
    class Book{
        public $title;
        public $author;
        public $discription;

        public function __construct($title, $author, $discription) {
            $this->title = $title;
            $this->author = $author;
            $this->discription = $discription;
        }
    }
?>