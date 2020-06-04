<?php 

    /*
    creare classe Book (titol, author, price) + classe Author (name, lastname)
    definire per entrambe le classi costruttore che accetta tutti gli attributi 
    definire per entrambe le classi metodo printMe() 
    */

    class Book {
        private $title;
        private $price;
        private $author;

        public function __construct($title, $price, $author) {

            $this -> title = $title;
            $this -> price = $price;
            $this -> author = $author;
        }

        public function print() {
            echo 'Ciao sono il libro ' . $this -> title . " e costo " . $this -> price . "€. Sono stato scritto da " . $this -> author -> printAuthor();
        }
    }

    class Author {
        private $name;
        private $lastname;

        public function __construct($name, $lastname) {

            $this -> name = $name;
            $this -> lastname = $lastname;

        }

        public function printAuthor() {
            return $this -> name . " " . $this -> lastname . ".";
        }

    }

    $author_1 = new Author ('George', 'Martin');
    
    $book_1 = new Book ('Le cronache del ghiaccio e del fuoco', 25, $author_1);
    
    $book_1 -> print();

?>