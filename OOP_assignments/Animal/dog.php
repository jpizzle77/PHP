<?php
//class Coder is a child of class Person and will inherit any attributes or methods from the Person class

include('animal.php');
//include('person.php'); //this will link this child class with its parent class. Think of it as being right under the Person class

class Dog extends Animal 
{
   

    public function __construct($name,$health)
    {
        parent:: __construct($name,$health); // grabs the parent _construct, which means it has access to all the properties and methods inside the parent constructor. Can modify
        // values for properties and alter the method
        $this->name = $name; // here making a change to the name
        echo $this->name . " new name inside dog constructor" . '<br>';
        $this->health = $health;
        echo $this->health . " new health inside dog construcor" . '<br>';
        
    }

    public function pet()
    {
        echo "woof woof";
        $this->health += 22;
        return $this;
    }
   
}

 /*$delilah = new Dog("Delilah",150);
var_dump($delilah);

//$me = new Animal("JP", 99);
//var_dump($me);
 $delilah->pet()->pet()->pet()->pet();
var_dump($delilah);
$delilah->run()->run()->run()->run()->run();
echo $delilah->health;
$delilah->walk()->run()->pet();
echo $delilah->health;
*/
?>