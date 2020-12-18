<?php
    include './Model/Book.php';

    class Model {
        public function getBookDetails() { 
            return array(
                "Python" => new Book('Python', 'Hitesh', 'Basic Python'),
                "Java" => new Book('Java', 'PD', 'Basic Java'),
                "Php" => new Book('Php', 'Nikita', 'Basic Php'),

            );
        }

        public function getBook($title) {
            $allbooks = $this->getBookDetails();
            return $allbooks[$title];
        }
    }
?>
