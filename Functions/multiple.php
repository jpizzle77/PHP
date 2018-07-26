<?php
//Part 1: Create a function called 'multiply()' that reads each value in an array (e.g. $A = array(2, 4, 10, 16))
// and returns a new array where each value has been multiplied by 5


function multiple($array)
{
    $new_array = array();

    foreach ($array as $value)
    {
          array_push($new_array, $value * 5);
    }
    
    return $new_array;
}

$numbers = array(2,4,6,8,10);
$numbers2 = array(100,150,5);
$new_array_times_5 = multiple($numbers2);


var_dump($new_array_times_5);

?>