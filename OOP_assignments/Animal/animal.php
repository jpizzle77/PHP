<?php

/*

*/
class Animal 
{
    public $name;
    public $health;
    

    public function __construct($name, $health)
        {
            //echo $this->price . " here is the price " . "<br>";
            $this->name = $name;
            echo $this->name . " new name" . '<br>';
            $this->health = $health;
            echo $this->health . " new health" . '<br>';
        
        }

    public function walk()
        {
            $this->health -= 3;
            echo $this->health . " new health after walking" . '<br>';
            return $this;
        }

    public function run()
        {
            $this->health -= 10;
            echo $this->health . " new health after running" . '<br>';
            return $this;
        }

    public function display_info()
        {
           // echo "The animal's name is " . $this->name . ' and the animals health is ' . $this->health .  '<br>';
            return "The animal's name is " . $this->name . ' and the animals health is ' . $this->health .  '<br>';
        }


}


/*$cat = new Animal("Whiskers", 100);
$cat->walk();
$cat->walk()->walk()->walk()->walk();
$cat->run();
$cat->run()->run()->walk();
$info = $cat->display_info();
echo $info . 'here is some info';
*/
?>
