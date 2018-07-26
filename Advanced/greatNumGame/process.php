<?php 

    session_start();   //initializes session

    // set 2 session variables. One to store message on whether guess was correct/incorrect. Other to set the color of the square depending on if the guess was correct/incorrect
    if(!isset($_SESSION['message']))
        {
            $_SESSION['message'] = "";
           
        }
    if(!isset($_SESSION['color']))
        {
            $_SESSION['color'] = "white";
            
        }


    // stored the post and session into variables. For readability
    $guess = $_POST['number_guess'];                // the number we guessed
    $random_number = $_SESSION['random_number'];    //(the number we are trying to guess)



    // the logic that compares the guess to the random number 
    if($guess < $random_number)
        {
            $_SESSION['color'] = "red";
            $_SESSION['message'] = "You guessed too low!!!";
        }
    elseif ($guess > $random_number) 
        {
            $_SESSION['color'] = "red";
            $_SESSION['message'] = "You guessed too high!!!";
        }

    else
        {
            $_SESSION['color'] = "green";
            $_SESSION['message'] = "Rockstar!!!!!!!!!";
        }



    header('Location: index.php') // redirect to index.php. Or could use just a '/'
?>