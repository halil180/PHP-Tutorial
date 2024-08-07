<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <?php $x = 10;?>


        <?php if ($x > 0): ?>
        x is <i>positive</i>
        <?php elseif ($x === 0): ?>
        x equals zero
        <?php else: ?>
        x is negative
        <?php endif; ?>

       
       <?php
       $a = [5, 3.14, "hello"];
       $a[] = "world";
       print_r($a);
       ?>
</body>
</html>