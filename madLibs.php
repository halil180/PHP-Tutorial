<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="madLibs.php" method="get">
        Color: <input type="text" name="color" > <br>
        plural noun: <input type="text" name="pluralNoun" > <br>
        celebrity: <input type="text" name="celebrity" > <br>

        <input type="submit" >
    </form>

    <?php 
    $color = $_GET["color"];
    $pluralNoun = $_GET["pluralNoun"];
    $celebrity = $_GET["celebrity"];
   echo "Roses are $color <br>"; 
   echo "$pluralNoun are blue <br>"; 
   echo "I love $celebrity <br>";
    ?>
    
</body>
</html>