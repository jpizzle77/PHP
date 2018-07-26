<?php

//Create a program that prints the sum of all the values in the array "numbers". Your "numbers" array should contain the following values: 1, 2, 5, 10, 255, 3.
//$students = array();
$numbers = array();
$numbers[] = 1;
$numbers[] = 2;
$numbers[] = 5;
$numbers[] = 10;
$numbers[] = 255;
$numbers[] = 3;

$numbers2 = array(5,8,-3,-19,25-100);

//var_dump($numbers);

$count = count($numbers);
//echo $count;

$sum = 0;

for ($i=0; $i < count($numbers2); $i++) 
{ 
    echo $numbers2[$i] . '<br>';
    $sum = $sum + $numbers2[$i];
}

echo 'The sum is ' . $sum;

//DONT FORGOT THE $ sign. Did not put them in front of i in the square brackets and the program was not working
?>

