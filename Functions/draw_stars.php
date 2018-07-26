<?php
//Assignment: Draw Stars
//Create a function called draw_stars() that takes an array of numbers and echo out  an asterisk, or '*'.

/*function draw_stars($array)
{
    for ($i=0; $i < count($array); $i++)
    { 
        //$stars = '';
        for ($j=0; $j < $array[$i]; $j++) 
        { 
            echo  '*';
        }
        echo '<br>';

    }
}

$x = array(4, 6, 1, 3, 5, 7, 25);
$y = array(1,5,100);

draw_stars($y);*/


function draw_stars($array)
{
        for ($i=0; $i < count($array); $i++) 
        { 
            if(gettype($array[$i]) == integer)
            {
                for ($j=0; $j < $array[$i]; $j++) 
                { 
                    echo  '*';
                }
                echo '<br>';
            }
            else
            {
                $first_character = $array[$i][0];
                //echo strlen($array[$i]) . " heres the count!";
                // $first_character = $first_character * count($array[$i]);
                for ($j=0; $j < strlen($array[$i]); $j++) 
                   { 
                        echo strtolower($first_character);
                   }
                echo '<br>';
           
            }
        }
        

    
}

$x = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
//$y = array(1,5,100);

draw_stars($x);

?>