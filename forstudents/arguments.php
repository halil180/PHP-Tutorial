<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="arguments.php?id=5&userName=Smith">
        Click
    </a>

    <?php
        echo"<br>";
    echo $_GET["id"];
    echo"<br>";
    // output: 5
    echo $_GET["userName"];
    echo"<br>";
    // output: Smith
    echo $_SERVER["QUERY_STRING"];
    // output: id=5&userName=Smith
    ?>
</body>

</html>