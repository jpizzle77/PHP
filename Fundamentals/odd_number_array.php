<?php

//To Do: Odd numbers array
//Create an array that inclusively contains all odd numbers between 0 to 20,000. Use the var_dump() function at the end to display the array values.
//array_push($users, "Oliver");

$odd_array = array();

for ($i=0; $i < 200; $i++) 
{ 
    if($i % 2 == 1)
    {
        array_push($odd_array, $i);
    }

}
var_dump($odd_array);
// echo $odd_array;
?>