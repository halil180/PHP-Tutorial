<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class ItalianChef extends Chef{

    function makePasta(){
        echo "the chef makes pasta <br>";
    }

    function makeSpecialDish(){
        echo "<i>the chef makes chicken parm</i> <br>";
    }
}



$italianChef = new ItalianChef();
echo "<br> VERY SPECIAL CHEF: <br> ";
$italianChef->makePasta();
$italianChef->makeSpecialDish();
?>

</body>
</html>


