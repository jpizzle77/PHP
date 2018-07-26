<?php
//Part 1: Create a function called 'multiply()' that reads each value in an array (e.g. $A = array(2, 4, 10, 16))
// and returns a new array where each value has been multiplied by 5


function multiple($array)
{
    foreach ($numbers as $key => $value) 
    {
      $numbers['$key'] = ['$value'] * 5;
        
    }
    return $numbers;

}




$numbers = array(2,4,6,8,10);
$new_array_times_5 = multiple($numbers)



?>