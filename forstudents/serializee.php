<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = [
        [1, 2, 3],
        ["red", "blue"]
    ];
    $b = serialize($a);
    file_put_contents("file.txt", $b);
    $c = file_get_contents("file.txt");
    $d = unserialize($c);
    print_r($d);
    ?>
</body>

</html>