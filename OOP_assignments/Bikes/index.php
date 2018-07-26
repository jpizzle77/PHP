<?php

/*Create a new class called Bike with the following properties/attributes:

price
max_speed
miles

*/
class Bike 
{
    public $price = 1250;
    public $miles = 500;
    public $max_speed= 20;

    public function __construct($price, $max_speed, $miles = 0)
    {
        echo "The price is $" . $price . ". The max speed is " . $max_speed . " MPH. There are " .  $miles . " miles on this bike" . '<br>';

    }
    
    public function set_price($new_price_passed_in)
    {
        $this->price = $new_price_passed_in;
    }
    public function get_price()
    {
        return $this->price;
    }

    public function set_miles($new_miles_passed_in)
    {
        $this->miles = $new_miles_passed_in;
    }
    public function get_miles()
    {
        return $this->miles;
    }

    public function set_max_speed($new_max_speed_passed_in)
    {
        $this->max_speed = $new_max_speed_passed_in;
    }
    public function get_max_speed()
    {
        return $this->max_speed;
    }

    public function displayInfo()  
    {
        return "The price is " . $this->price . " dollars. The total miles is " . $this->miles . "miles. And the max speed is " . $this->max_speed ." MPH." . "<br>";
    }

    public function drive($miles)
    {
        echo $this->miles . " total miles" . '<br>';
        echo "DRIVING!!!!!!!!!!!!!!!" . '<br>';
        $this->miles= $this->miles + $miles;
        echo $this->miles . '<br>';
        //return $this->miles;
    }

    public function reverse($miles)
    {
        echo $this->miles . " total miles" . '<br>';
        echo "REVERSING!!!!!!!!!!!!!!!" . '<br>';
        $this->miles= $this->miles - $miles;
        echo $this->miles . '<br>';
        //return $this->miles;
    }
    
   
  
}

//$bike = new Bike();  Will toss an error as the constructor is expecting at least 2 arguments,but can take 3 arguments if the miles is specified
$bike1 = new Bike(50,50,1000);
$bike2 = new Bike(200,100);
$bike3 = new Bike(5000, 100000, 69);
echo $bike3 -> get_price() . '<br>'; // will print default value (1250). If no default value, it prints blank

$bike3->set_price(4000);
echo $bike3 -> get_price() . '<br>';

echo $bike2 -> get_price() . '<br>';
$bike2 ->set_price(1000000) . '<br>';
$bike2 ->set_max_speed(69) . '<br>';
$bike2 ->set_miles(33333) . '<br>';
echo "The new price is $" . $bike2->get_price() .  " dollars"  . '<br>';

echo $bike1->get_max_speed() . '<br>';
$bike1->set_max_speed(300);
echo "The new max speed is " . $bike1->get_max_speed() ."MPH!" . '<br>';

$info = $bike2->displayInfo();
echo $info . '<br>';

$bike2->drive(33); // think of it as $bike2->drive(this, 33) or drive($bike2,33) passing 'this' bike (or whole bike) info to function drive()

$bike2->drive(66);
$bike2->drive(1);
echo "The bike was rode 3 times. Its new total mileage is " . $bike2->get_miles();

$new_info = $bike2->displayInfo();  // again think of it as displayInfo(this). The bike itself is being passed as an argument;
echo $new_info;

$bike2->reverse(4200);
$bike2->reverse(190);
$bike2->reverse(25000);

echo "After reversing the bikes new total mileage is " . $bike2->get_miles();
 









?>