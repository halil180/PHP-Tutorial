<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $isMale = true;
    $isTall = false;
    if ($isMale || $isTall) {
        echo "You are a tall male";
    } else {
        echo "You are not male";
    }
    ?>
</body>

</html>