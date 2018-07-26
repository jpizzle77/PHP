<?php

/*

*/
class Car 
{
    public $price = 20;
    public $speed;
    public $fuel;
    public $mileage;
    public $tax = 12;

    public function __construct($price, $speed, $fuel, $miles)
    {
        //echo $this->price . " here is the price " . "<br>";
        $this->price = $price;
        //echo $this->price . " new price" . '<br>';
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->miles = $miles;

        if($this->price > 9000)
        {
            $this->tax = 15;
        }
        
        
        echo $this->displayInfo();

    }
    
    public function set_price($new_price_passed_in)
    {
        $this->price = $new_price_passed_in;
    }
    public function get_price()
    {
        return $this->price;
    }

    public function displayInfo()  
    {
        return "The price is " . $this->price . " dollars. The total miles is " . $this->miles . "miles. And the max speed is " . $this->speed ." MPH." . " It uses " . $this->fuel . ". Its taxed at a rate of " . $this->tax . "%." . "<br>";
    }


}

// the constructor takes 4 parameters. Enter 4 arguments to be passed to constructor
$car1 = new Car(20000,200,"gas",99);
$car2 = new Car(3000, 100, "diesel", 150000);
$car3 = new Car(250, 0, "gas", "unknown");
$car4 = new Car(8000, 120, "diesel", 75000);
$car5 = new Car(30000, 150,"gas", 0);




?>

