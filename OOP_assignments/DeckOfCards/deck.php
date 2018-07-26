<?php

class Deck 
{
    public $deck = [];
    //private $card_value;
    //private $suits;

    public function __construct() // this will construct a standard deck of 52 playing cards
    {
      $card_value = ["Ace", 2,3,4,5,6,7,8,9,10, "Jack","Queen","King"];
      $suits = ["Diamonds", "Hearts", "Clubs" ,"Spades"];
      //$this->deck = [];
      //echo "Creating a deck......"  . '<br>';

      foreach ($suits as  $suit) // will make 4 iterations
      {
          //echo  $suit .'<br>';
          foreach ($card_value as  $value) //will make 13 iterations through each of the 4 suits
          {
               $this->deck[] = $value . ' of ' .  $suit . ', ';


          }
      }
      return $this;
    }

    public function shuffle()
    {
        for ($i=0; $i < 100; $i++)  // will swap  2 different cards 100 times
        { 
            $rand1 = rand(0,51); // determines the 1st card's index value
            //echo $rand1 . '<br>';
            $rand2 = rand(0,51); // determines the 2nd card's index value
            //echo $rand2 . '<br>';

            $temp = $this->deck[$rand1];
            $this->deck[$rand1] = $this->deck[$rand2];
            $this->deck[$rand2] = $temp;
           // return $this;
            
        }
       
    }

    public function deal()
    {
        echo "Dealing 4 cards to 4 players" . '<br>' . '<br>';
        for ($players=1; $players < 5 ; $players++) //this is saying there are 4 players to deal to
        { 
            //var_dump($this->deck);
            echo  "Player " . $players . "'s hand" . '<br>' . '<br>' ;
            for ($i=0; $i < 5; $i++) // 5 cards to be dealt to each player
            {
                $x = array_pop($this->deck); //pops off last card in array ($this->deck) and stores that value into $x
                echo $x .'<br>' . '<br>';

                ///////////////    HERE ARE SOME OTHER METHODS I TRIED  (unset() and array_diff())
                //$rand = rand(0,51);
                //$x = $this->deck[$rand]; //this will grab a random card from deck
                //unset($this->deck[$rand]);  //this was kinda working. Problem was it didnt remove the index from array (only the value). So the empty index could still be selected, and it will show a blank card instead
                //$this->deck = array_diff($this->deck, deck("$rand"));
            }

        }
    }

    public function reset()
    {
        $this->deck = new Deck(); 
        var_dump($this->deck);
    }

    
}

$new_deck = new Deck();  // remember to think of it as $new_deck = new Deck($this);
$new_deck->shuffle();
//var_dump($new_deck);

$new_deck->deal();
//$new_deck->reset();
//echo $new_deck->deck[5];
//var_dump($new_deck);




?>