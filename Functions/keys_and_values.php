<?php

//To Do: Keys and Values
//Let's create a new array called $users that have the following keys and values

function keys_and_values($array)
{
    echo "There are " . count($array) . " keys in this array" . '<br>';
    
    foreach ($array as $key => $value) 
    {
       echo $key . '<br>';
        
    }

    foreach ($array as $key => $value) 
    {
       echo 'The value in the key ' . '"' . $key .'"' . ' is ' . '"' . $value . '"' . '<br>';
    }
}




$users = array("first_name" => "Billy", "last_name" => "Dee");

$users2 = array("first_name" => "Billy", "last_name" => "Kid", "age"=> 33);
keys_and_values($users2);
//var_dump($users);

?>
