<?php

//Create a function called 'print_lists' that takes any array and prints each value in the array in an <li>, which is part of a <ul>. 
//For example, running print_lists($A) where $A = array(2,3,'hello'); should output a html response that looks like...

function print_lists($array)
{
  
    echo '<ul>';
    foreach($array as $value){
     echo '<li>'. $value .'</li>';
    }
    echo '</ul>';
   
}

$list1 = array(2,3,"hello");
$list2 = array("cat",7,9,-22, 3,"hello", TRUE);
print_lists($list2);

//echo $new_array;



?>

