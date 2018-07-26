<?php

$options = array(
    array("brand" => "Puma","code" => "p01","name" => "Puma One"),
    array("brand" => "Puma","code" => "p02","name" => "Puma Two"),
    array("brand" => "Puma","code" => "p03","name" => "Puma Three"),
    array("brand" => "Nike","code" => "n01","name" => "Nike One"),
    array("brand" => "Nike","code" => "n02","name" => "Nike Two"),
    array("brand" => "Nike","code" => "n03","name" => "Nike Three"),
    array("brand" => "Nike","code" => "n04","name" => "Nike Four"),
    array("brand" => "Adidas","code" => "a01","name" => "Adidas One"),
    array("brand" => "Adidas","code" => "a02","name" => "Adidas Two"),
    array("brand" => "Adidas","code" => "a03","name" => "Adidas Three"),
    array("brand" => "Adidas","code" => "a04","name" => "Adidas Four"),
    array("brand" => "Adidas","code" => "a05","name" => "Adidas Five"),
    array("brand" => "Adidas","code" => "a06","name" => "Adidas Six")
);


$newOptions = array();
foreach ($options as $option) {
  $brand = $option['brand'];
  $code = $option['code'];
  $name = $option['name'];

  $newOptions[$brand][$code] = $name;
}



?>