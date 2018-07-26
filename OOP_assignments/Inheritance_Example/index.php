<?php
include('person.php');
include('coder.php');


$dude = new Person("Frankie", 25);
echo $dude->namespace;

echo "yo yo" . '<br>';

$coder2= new Coder("Hank", 19);
echo $coder2->name;



?>