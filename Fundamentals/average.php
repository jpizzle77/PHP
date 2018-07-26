<?php
//To Do: Average
//Create a program that prints the average of the values in the array called "numbers". Array "numbers" should have the following values: 1, 2, 5, 10, 255, 3.

$numbers = array(1,2,5,10,255,3);
$sum = 0;
$average = 0;

for ($i=0; $i < count($numbers); $i++) 
{ 
    //echo $numbers[$i] . '<br>';
    $sum = $sum + $numbers[$i];
}

echo 'The sum of the array is ' . $sum . '<br>';

$average = $sum / count($numbers);
echo 'The average of the array is ' . $average;



?>