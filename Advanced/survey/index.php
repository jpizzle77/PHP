<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <script src="main.js"></script>
</head>
<body>

<form action='result.php' method='post'>
    <p>Name:<input type='text' name='name'></p>
   
    <p>Location<select name="location">
    
        <option value="">Select...</option>
        <option value="Los Angeles">Los Angeles</option>
        <option value="Seattle">Seattle</option>
        <option value="San Jose">San Jose</option>
        <option value="Chicago">Chicago</option>
    </select></p>
    <p>Language<select name="language">
        <option value="">Select...</option>
        <option value="C#">C#</option>
        <option value="Python">Python</option>
        <option value="JavaScript">JavaScript</option>
        <option value="PHP">PHP</option>
    </select></p>
    <p>Leave a comment:</p>
    <textarea name="comment" id="" cols="30" rows="10"></textarea>
    <input type='submit' value='Comment!'>
</form>
    
</body>
</html>