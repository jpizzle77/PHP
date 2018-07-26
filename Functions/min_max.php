<?php

//Create a function get_max_and_min() that takes an array of numbers and, then, returns both the minimum and the maximum number from the given array as an associative array.
//Do not use the PHP function max() or min() to get this to work. See if you can do this using arrays and for loops!

function get_max_and_min($array)
{
    $max = $array[0];
    $min = $array[0];
    

    foreach ($array as $value)
    {
        if($value > $max)
        {
            $max = $value . '<br>';
        }

        if($value < $min)
        {
            $min = $value . '<br>';
        }
    }

    $array = array("Max" => $max, "Min" => $min);
    var_dump($array);
    return $array;
    //echo $max;
    //echo $min;



}


$numbers = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02); 
$output = get_max_and_min($numbers); 
var_dump($output); 

?>