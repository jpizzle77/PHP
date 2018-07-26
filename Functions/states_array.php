<?php
/*<select>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>*/

function dropdown($array)
{
    echo '<p>' . 'Using a foreach loop' . '</p>';
    echo '<select>';
    foreach($array as $value)
    {
        echo '<option>'. $value .'</option>';
    }

    echo '</select>';

    echo '<p>' . 'Using a standard for loop' . '</p>';

    echo '<select>';
    for ($i=0; $i < count($array); $i++) 
    { 
        echo '<option>'. $array[$i] .'</option>';  //DONT FORGET TO PUT '$' inside [i] or you will get a blank drop down list
    }

    echo '</select>';

    echo '<p>' . 'Adding 3 new elements into array via "array_push function". Then use a foreach to run through the new array' . '</p>';

    array_push($array, "NY", "MI","TX");

    echo '<select>';
    foreach($array as $value)
    {
        echo '<option>'. $value .'</option>';
    }

    echo '</select>';

}


$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
//$states2 = array('CA', 'WA', 'VA', 'UT', 'AZ', 'NY', 'MI', 'TX');
dropdown($states);



?>