<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $luckyNumbers = array(4, 8, 14, 16, 23, 42);
    for($i=0;$i < count($luckyNumbers);$i++){
    echo "$luckyNumbers[$i] <br>";
    }

    echo count($luckyNumbers);
    ?>
</body>

</html>

