<?php

/*$x = array(1,3,5,7);
foreach($x as $key => $value)
{
  echo $key . " - " . $value ."<br />";
}

$x = array(1,3,5,7);
foreach($x as $value)
{
  echo $value ."<br />";
}

$x = array("hi" => "Dojo", "awesome" => "game");
foreach($x as $key => $value)
{
  echo $key . " - " . $value ."<br />";
}

$x = array("hi" => "Dojo", "awesome" => "game");
foreach($x as $key => $value)
{
  echo $value ."<br />";
}

$x = array("hi" => "Dojo", "awesome" => "game");
foreach($x as $key => $value)
{
  echo $key ."<br />";
}*/


$x = array( array(1,3,5), array(2,4,6), array(3,6,9) );
foreach($x as $key => $value)
{
  echo "Key is {$key}<br />";
  echo "var_dumping value";
  var_dump($value);
}



?>