<?php

class Human {
  public $health;
  public $clan;
  public $strength = 3;
  public $intelligence = 3;
  public $stealth = 3;
  public function __construct() 
  {
    echo "human constructor" . '<br>';
    $this->health = 100;
  }
  public function __get($property)
  {
    echo "Inside the __get magic method";
    if (property_exists($this, $property))
    {
      return $this->property;
    }
    else
    {
      echo "why is it failing??" .'<br>';
    }
  }
  public function __set($property, $value) 
  {
    if (property_exists($this, $property)) 
    {
      $this->$property = $value;
    }
    return $this;
  }
  public function trashTalk() 
  {
    echo "You want a piece of me?";
  }
  public function attack($human) 
  {
    $this->trashTalk();
    $luck = rand(0, 100);
    echo $luck . " the luck number" . '<br>';
    echo $this->intelligence . " what a dumbass" . '<br>';
  
    if($luck * $this->intelligence > 100) 
    {
      if($luck > $human->stealth) 
      {
        $human->health -= $this->strength;
        echo "human health went down by " . $this->strength . '<br>';
        return true;
      } 
      else 
      {
        echo "you sunk my battlechip" . '<br>';
        return false;
      }
    } 
    else 
    {
      echo "yahtzee!!" . '<br>';
        return false;
    }
  }
}
class Wizard extends Human
{

  public function __construct()
  {
      
      parent::__construct();
      echo "Inside the __constructor for wizard. Will inherit 100 health but also sets values only for the wizard instance" . '<br>';
      $this->clan = "Wizard";
      $this->strength = 5;
      $this->intelligence = 40;
      $this->stealth = 5;
  }
    public function heal()
    {
        $this->health += 10;
        return $this;
   
    }     
    
    public function trashTalk()
    {
        echo "jerk" . '<br>';
    }
}

class Ninja extends Human
{
    public function steal()
    {
        $this->stealth += 5;
    }

    public function attack($human)
    {
        parent::attack($human);
        $this->steal();
    }
    public function trashTalk()
    {
        echo "what up u dirty slut" . '<br>';
    }
}

class Samurai extends Human
{
    public function sacrifice()
    {
        $this->health -= 5;
        $this->strength += 10;
    }
    public function trashTalk()
    {
        echo "The flower that blooms in adversity is the most beautiful of all" . '<br>';
    }
}

// creating an instance of Wizard, Ninja and Samurai
/*$harry = new Wizard();
$rain = new Ninja();
$tom = new Samurai();

// all instances still have human properties because its class extends the Human class
echo "Harry health: " . $harry->health . '<br>';
echo "Stealth health: " .$rain->health . '<br>';
echo "Tom health: " .$tom->health . '<br>';

// yet they are subclasses which mean they can extend the current functionality of Human class
// instances of the Wizard class can perform the heal method
$harry->heal();
echo "Harry's new health: " . $harry->health . '<br>';

// instances of the Ninja class can perform the steal method
$rain->steal();
echo "Rain's new stealth: " . $rain->stealth . '<br>';

// instances of the Samurai class can perform the sacrifice method
$tom->sacrifice();
echo "Tom health : " . $tom->health . '<br>';
echo "Tom strength : " .$tom->strength . '<br>';

echo $tom->strength . 'toms strength' . '<br>';
echo $tom->__get($strength) . " Yo yo ma" . '<br>';

$tom->trashTalk() . '<br>';
$harry->trashTalk() . '<br>';
$rain->trashTalk() . '<br>';*/

$larry = new Wizard();
echo $larry->clan . '<br>';
$larry->heal()->heal()->heal();
echo $larry->health;

$beavis = new Human();

echo $larry->attack($beavis);
$tom = new Samurai();
echo $tom->strength . '<br>';
echo $tom->__get($strength) . " Yo yo ma" . '<br>';


$herman = new Ninja();
echo $herman->stealth . " herman's stealth b4 attacking" . '<br>';
$herman->attack($larry);
echo $herman->stealth . " herman's stealth after attacking" . '<br>';
$herman->attack($tom);
echo $herman->stealth . " herman's stealth after attacking Tom" . '<br>';
echo $herman->intelligence . " herman's intelligence after attacking" . '<br>';
?>