<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>


<form method="post" action="process.php">
    <input type="hidden" name="action" value="register">
    <input type="text" name="first_name">
    <input type="text" name="last_name">
    <input type="text" name="email">
    <input type="password" name="password">
    <input type="submit" value="Register">
</form>
<form method="post" action="process.php">
    <input type="hidden" name="action" value="login">
    <input type="text" name="email">
    <input type="password" name="password">
    <input type="submit" value="Login">
</form>

    
</body>
</html>