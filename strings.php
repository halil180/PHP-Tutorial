<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $phrase = "Giraffe";
    $charName = "HELLO WORLD <br>";
    echo strtolower($charName);

    $charName = "GOODBYE WORLD <br>";
    echo strtoupper($charName);
    $charName = "HALIL";
    echo  " $charName lenght :";
    echo strlen($charName);
    echo "<br>";
    echo $charName[0]; //first char in the string
    echo "<br>";
    echo str_replace("HALIL","Dennis",$charName);


    echo substr($phrase,3);
    

    ?>
    
</body>
</html>