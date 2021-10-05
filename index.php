<!-- - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza (proprietà)
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori 
delle relative proprietà, se possibile cerchiamo di stampare senza ricorrere a var_dump -->


<?php 

class Movie
{
  
  public $title; 
  public $director; 
  public $year; 

public function __construct()
{
    
}

public function presentazione()
{
    echo "Ciao il mio film preferito è $this->title";
}

//*GETTER 

public function getDirector()
{
    echo "Dalla regista $this->director " ;
}

public function getYear()
{
    return $this->year;
}


}

// Istanza n.1

$mammaMia = new Movie();
$mammaMia->title = "Mamma mia!";
$mammaMia->director ="Phyllida Lloyd";
$mammaMia->year = "1999";

// Istanza n.2

$wanted = new Movie();
$wanted->title="Wanted";
$wanted->director= "Timur Bekmambetov";
$wanted->year = "2008";


echo $mammaMia->presentazione();
echo "<br />";
echo $mammaMia->getDirector();
echo "<br />";
echo "Del". " ".$mammaMia->getYear();

