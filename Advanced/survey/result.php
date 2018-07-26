

<html>
  <head>
    <meta charset="utf-8">
    <title>Survey Form</title>
  </head>
  <body>
    <h1>Submitted Information</h1>
    <p>Name: <?= $_POST['name'] ?></p>
    <p>Dojo Location: <?= $_POST['location'] ?></p>
    <p>Favorite Language: <?= $_POST['language'] ?></p>
    <p>Comment: <?= $_POST['comment'] ?></p>
    <a href="/Advanced/survey"><button>Go Back</button></a>
  </body>
</html>