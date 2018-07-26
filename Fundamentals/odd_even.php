<?php
//To Do: Odd or even
//Create a program that counts from 1 to 2000. As it loops through each number, have your program generate the number and a message saying whether it's odd or even.


for ($i=0; $i < 200; $i++) 
{ 
    if($i % 2 == 0)
    {
        echo 'Number is ' . $i . '.' . ' This is an even number.' . '<br>';
    }
    else
    {
        echo 'Number is ' . $i . '.' . ' This is an odd number.' . '<br>';
    }
}

?>