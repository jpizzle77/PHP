<?php
//class Coder is a child of class Person and will inherit any attributes or methods from the Person class

include('dog.php');
//include('person.php'); //this will link this child class with its parent class. Think of it as being right under the Person class

class Dragon extends Dog 
{
   

    public function __construct($name,$health)
    {
        echo "inside dragon construct";

        parent:: __construct($name,$health); // grabs the parent _construct, which means it has access to all the properties and methods inside the parent constructor. Can modify
        // values for properties and alter the method
        $this->name = $name; // here making a change to the name
        echo $this->name . " new name inside dragon constructor" . '<br>';
        $this->health = $health;
        echo $this->health . " new health inside dragon construcor" . '<br>';
        
    }

    public function fly()
    {
        echo "woof woof";
        $this->health += 55;
        return $this;
    }
   
}

$puffy = new Dragon("Puff", 175);
echo $puffy->health;

$puffy->pet()->pet()->pet();
echo $puffy->health;

echo $puffy->fly()->fly()->walk()->run()->pet()->run()->display_info();




?>