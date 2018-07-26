<?php

//Assignment: Coin Throw
//You're going to create a program that simulates throwing a coin 5,000 times. Your program should display how many times the head/tail appears.
//Attempt #1: Throwing a coin... It's a head! ... Got 1 head(s) so far and 0 tail(s) so far
function coin_toss()
{
    $tails_count = 0;
    $heads_count = 0;

    for ($i=1; $i < 5001; $i++) 
    { 
        $coin_flip = rand(0,1);

        if($coin_flip == 0) //if the number is 0, use it as 'tails'
        {
                $tails_count += 1;
                echo 'Attempt #' . $i . '. Throwing a coin.... Its a tails! ... Got ' . $tails_count . ' tail(s) so far and ' . $heads_count . ' head(s) so far' . '<br>';
                

        }
        else //if the number is  1, use it as 'heads'
        {
            $heads_count += 1; 
            echo 'Attempt #' . $i . '. Throwing a coin.... Its a heads! ... Got ' . $heads_count . ' head(s) so far and ' . $tails_count . ' tail(s) so far' . '<br>';

        }
    }

}


coin_toss();
?>