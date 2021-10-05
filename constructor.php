<?php

class Movie{
    public $title; 
  public $director; 
  public $year; 


  public function __construct($_title, $_director, $_year=1999)
  {
    $this->title=$_title;
    $this->director=$_director;
    $this->year=$_year;
}
}

$wanted= new Movie ('Wanted', "Timur Bekmambetov",2008);


var_dump($wanted);

