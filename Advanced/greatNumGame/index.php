<?php 

session_start(); 
//echo session_id() . '<br>'; // will show something like this '69299d6fee66a5b995d3c07aac73fc39'

if(!isset($_SESSION['random_number']))
{
    $_SESSION['random_number'] = random_int(1,100);
    echo $_SESSION['random_number'] . ' random number created' . '<br>';
}



?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <style type="text/css"> 
        div,h1,h2{
            text-align:center;
        }
        #box {
            width: 300px;
            height: 300px;
            
            margin: auto;
        }
        .color{
            background-color: <?= $_SESSION['color'] ?>;
        }
    </style>
    <script src="main.js"></script>
</head>
<body>

        <h1>Welcome to the Great Number Game</h1>
        <h2>I'm thinking of a number between 1 - 100</h2>
        <h2>take a guess!</h2>

        <div>
        <form method="post" action="process.php">
           <input type="text" name="number_guess">
           <p></p>
           <input type="submit" value="Submit">
        </form>
        </div>
        <p></p>

        <div id="box" class="color">
            <h1><?= $_SESSION['message'] ?></h1>
           
                 <?php if($_SESSION['color'] == "green"){ ?>
                    <div>
                        <form  action="reset.php">
                            <input type="submit" value="Play Again">
                        </form>
                    </div>
                <?php } ?>    
        </div>

        <p></p>

        
        
    
</body>
</html>