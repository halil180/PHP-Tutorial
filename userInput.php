<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="userInput.php" method="get">
        Name : <input type="text" name="name" >
        Age : <input type="text" name="age" >
        <input type="submit">
    </form>
    <br>

    YOUR NAME IS :  <?php  echo $_GET["name"]?>
    YOUR AGE IS :  <?php  echo $_GET["age"]?>
</body>
</html>