<?php
//will ask the question.... Is something set?

session_start();
echo session_id();

$users= array("Todd", "Hans", "Norbert");
echo isset($users['name']); //show blank

//use in if statement

if(isset($users['name']))
{
    echo "its set" . '<br>';

}
else
{
    echo "Not set" . '<br>';
}

$stuff = array("thing1" =>"marker", "thing2"=> "headphones");

if(isset($stuff['thing1']))
{
    echo "its set" . '<br>';

}
else
{
    echo "not set" . '<br>';
}


if(isset($stuff['thing3']))
{
    echo "its set" . '<br>';

}
else
{
    echo "thing 3 not set" . '<br>';
}
?>
