<?php


class MyFirstClass
{
    public $property1 = "I am the first property! Woohoo" . '<br>';
    public function __construct($instance)
    {
        //echo "I get called for each instance of this class!" . '<br>';
        echo "I am getting called for object: " . $instance . '<br>';
    }
    public function set_property1($property1)
    {
        $this->property1 = $property1;
    }
    public function get_property1()
    {
        return $this->property1;
    }
}
$obj1 = new MyFirstClass('instance one'); // runs the __construct function immediately
$obj2 = new MyFirstClass('instance two');// runs the __construct function immediately
echo $obj1->get_property1();
echo $obj2->get_property1();
$obj1->set_property1('New value for property1 for the first instance' . '<br>');
$obj2->set_property1('New value for property1 for the second instance' . '<br>');
echo $obj1->get_property1();
echo $obj2->get_property1();


?>