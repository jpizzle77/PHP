<?php 

session_start(); 
echo session_id(); // will show something like this '69299d6fee66a5b995d3c07aac73fc39'
//The session_id() method is both a getter and a setter. If you don't specify a parameter, then it acts as a getter.

if(!isset($_SESSION['counter']))
{
    $_SESSION['counter'] = 1;
}
else
{
    $_SESSION['counter'] += 1;
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
        h1,h2{
            text-align:center;
        }
    </style>
    <script src="main.js"></script>
</head>
<body>

        <h1>THe website has been visited</h1>
        <h2><?= $_SESSION['counter']  ?> times</h2>
    
</body>
</html>