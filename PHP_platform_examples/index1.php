<?php

class Human
    {
        public $health = "100";
        public $age = "41";
    }

$human1 = new Human();
$human2 = new Human();
$human3 = new Human();
$human4 = new Human();



//shift - alt - down key to make quick copies of line
var_dump($human1);
var_dump($human2);
var_dump($human3);
var_dump($human4);

echo $human1->health."<br>";
echo $human2->age . " years old";

?>