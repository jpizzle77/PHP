<?php
//class Coder is a child of class Person and will inherit any attributes or methods from the Person class

include('index.php');
include('person.php'); //this will link this child class with its parent class. Think of it as being right under the Person class

class Coder extends Person 
{
    public $health;
    public $clan;

    public function __construct($name,$age)
    {
        parent:: __construct($name,$age);
    }

    public function code()
    {
        echo "I am coding shit right now";
    }
   
}

// $coder1 = new Coder("Beavis", 19);
// var_dump($coder1);

?>