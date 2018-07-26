
<?php

$subject = "math";
if($subject == 'Math') {
    //echo "The subject is Math";
} else {
    //echo "The subject is English";
}

$first_name = 'Billy';
$roles = array('guest', 'member', 'admin');
$role = 0; // The key which associates with the $roles array
switch($first_name)
{
    case 'Tom':
        $role = 1;
    break;
    case 'Severus':
        $role = 1;
    break;
    case 'Oliver':
        $role = 2;
    break; 
    default:
        $role = 0;
    break;   
}
echo "Hello $first_name ! Your role is $roles[$role]";

?>