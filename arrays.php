<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <?php 
    $friends = array("kevin","karen");
     $friends[2] = "Halil" ;
    echo $friends[2];
    ?>

<br>
    <?php
    
    echo count($friends);
    ?>
    
</body>
</html>