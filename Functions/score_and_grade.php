<?php



function score()
{
    for ($i=0; $i < 101; $i++) 
    { 
        $random_score = rand(50,100);
        if($random_score >= 90)
        {
             echo '<h1>' . "Your score " . $random_score . '/100' . '</h1>';
             echo '<h2>' . "Your grade is a A" . '</h2>';
        }
        elseif ($random_score >= 80 && $random_score < 90) 
        {
            echo '<h1>' . "Your score " . $random_score . '/100' . '</h1>';
            echo '<h2>' . "Your grade is a B" . '</h2>';
        }
        elseif ($random_score >= 70 && $random_score < 80) 
        {
            echo '<h1>' . "Your score " . $random_score . '/100' . '</h1>';
            echo '<h2>' . "Your grade is a C" .  '</h2>';
        }
        elseif ($random_score >= 60 && $random_score < 70) 
        {
            echo '<h1>' . "Your score " . $random_score . '/100' . '</h1>';
            echo '<h2>' . "Your grade is a D" . '</h2>';
        }
        else
        {
            echo '<h1>' . "Your score " . $random_score . '/100' . '</h1>';
            echo '<h2>' . "You failed" . '</h2>';
        }
       
    }

}

score();
//$random_score = rand(0,1);
//echo $random_score

?>