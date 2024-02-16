<?php
/*
 - è definita una classe 'Movie'
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti 'Movie' e stampati a schermo i valori delle relative proprietà
*/

class Movie {
    public $title;
    public $genre;
    public $release_year;

    function __construct($title, $genre, $release_year) {
        $this->title = $title;
        $this->genre = $genre;
        $this->release_year = $release_year;
    }

    function getTitle() {
        return $this->title;
    }

    function getGenre() {
        return $this->genre;
    }
    
    function getYear() {
        return $this->release_year;
    }
}

$suspiria = new Movie("Suspiria", "Horror", "1977");
echo $suspiria->getTitle();
echo "<br>";
echo $suspiria->getGenre();
echo "<br>";
echo $suspiria->getYear();
echo "<br>";
echo "<br>";
echo "<br>";

$ioSonoLeggenda = new Movie("ioSonoLeggenda", "Horror/sci-fi", "2007");
echo $ioSonoLeggenda->getTitle();
echo "<br>";
echo $ioSonoLeggenda->getGenre();
echo "<br>";
echo $ioSonoLeggenda->getYear();
echo "<br>";
echo "<br>";
echo "<br>";
?>