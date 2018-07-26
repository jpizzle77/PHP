<?php 
    session_start();

    if(!isset($_SESSION['building']))
        {
            $_SESSION['building'] = "";
           
        }
    if(!isset($_SESSION['gold_amount']))
        {
            $_SESSION['gold_amount'] = "";
           
        }

    if(!isset($_SESSION['all_messages']))
        {
            $_SESSION['all_messages'] = array();
           // var_dump($_SESSION['all_messages']);
        }

    if(!isset($_SESSION['color']))
        {
            $_SESSION['color'] = "";
           
        }
    
    
    

    $building_type = $_POST['building']; 
    //echo $_SESSION['total_gold_for_user'] . "total gold for user";

    if($building_type == "farm")
    {
        $_SESSION['gold_amount'] = random_int(10,20);
        $_SESSION['total_gold_for_user'] += $_SESSION['gold_amount'];
        $message = "You  worked on a " . $building_type . " and earned " . $_SESSION['gold_amount'] . " gold. You now have " . $_SESSION['total_gold_for_user'] . " pieces of gold";
        $_SESSION['all_messages'][] = $message;
        $_SESSION['color'] = "green";
      
    }
    elseif($building_type == "cave")
    {
        $_SESSION['gold_amount'] = random_int(5,10);
        $_SESSION['total_gold_for_user'] += $_SESSION['gold_amount'];
        $message = "You  searched in a " . $building_type . " and earned " . $_SESSION['gold_amount'] . " gold. You now have " . $_SESSION['total_gold_for_user'] . " pieces of gold";
        $_SESSION['all_messages'][] = $message;
        $_SESSION['color'] = "green";
       
    }
    elseif($building_type == "house")
    {
        $_SESSION['gold_amount'] = random_int(2,5);
        $_SESSION['total_gold_for_user'] += $_SESSION['gold_amount'];
        $message = "You  relaxed at your " . $building_type . " and earned " . $_SESSION['gold_amount'] . " gold. You now have " . $_SESSION['total_gold_for_user'] . " pieces of gold";
        $_SESSION['all_messages'][] = $message;
        $_SESSION['color'] = "green";
       
    }
    else
    {
        $_SESSION['gold_amount'] = random_int(-50,50);
        $_SESSION['total_gold_for_user'] += $_SESSION['gold_amount'];
        if($_SESSION['gold_amount'] > 0)
        {
            $message = "You  went to the " . $building_type . " and won " . $_SESSION['gold_amount'] . " gold. You now have " . $_SESSION['total_gold_for_user'] . " pieces of gold";
            $_SESSION['all_messages'][] = $message;
            $_SESSION['color'] = "green";
        }
        elseif($_SESSION['gold_amount'] < 0)
        {
            if($_SESSION['total_gold_for_user'] < 0)
            {
                $message = "You  have some serious gambling problems!!! You lost another " . $_SESSION['gold_amount'] . " pieces of gold.  You now owe " . $_SESSION['total_gold_for_user'] . " gold pieces now. Stop going to the " . $building_type;
                $_SESSION['all_messages'][] = $message;
                $_SESSION['color'] = "red";
            }
            else
            {
                $message = "You  went to the " . $building_type . " and lost " . $_SESSION['gold_amount'] . " gold. You now have " . $_SESSION['total_gold_for_user'] . " pieces of gold";
                $_SESSION['all_messages'][] = $message;
                $_SESSION['color'] = "red";
            }
           
        }
        else
        {
            $message = "You  went to the " . $building_type . " and broke even ";
            $_SESSION['all_messages'][] = $message;
            $_SESSION['color'] = "blue";
        }
    }
   

    //var_dump($_SESSION['all_messages']);
    //die();

    header('location: index.php')


?>